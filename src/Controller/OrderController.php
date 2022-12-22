<?php

namespace App\Controller;

use App\Entity\Food;
use App\Entity\Order;
use App\Entity\Restaurant;
use App\Entity\User;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



/**
 * @Route("/order")
 */
class OrderController extends AbstractController
{

    /**
     * @Route("/index/{Uid}", name="app_order_index", methods={"GET"})
     * @Entity("user", expr="repository.find(Uid)")
     */
    public function index(OrderRepository $orderRepository, User $user): Response
    {

        return $this->render('order/index.html.twig', [
            'orders' => $orderRepository->findBy(
                ['owner' => $user->getId()]
            ),
        ]);
    }

    /**
     * @Route("/new/{Rid}/{Fid}/{Uid}", name="app_order_new", methods={"GET", "POST"})
     * @Entity("food", expr="repository.find(Fid)")
     * @Entity("restaurant", expr="repository.find(Rid)")
     * @Entity("user", expr="repository.find(Uid)")
     */
    public function new(Request $request, OrderRepository $orderRepository, Food $food, Restaurant $restaurant, User $user): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);
        $order->setFood($food);
        $order->setRestaurant($restaurant);

        if ($form->isSubmitted() && $form->isValid()) {
            $order->setOwner($this->getUser());
            if ($order->getFood()->getIsPromoted())
                $order->setTotal(($order->getQty() * $order->getFood()->getPrice()) - (($order->getFood()->getPrice() * $order->getFood()->getPromotion()) / 100));
            else
                $order->setTotal($order->getQty() * $order->getFood()->getPrice());

            $orderRepository->add($order);
            return $this->redirectToRoute('app_order_checkout', ['id' => $order->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('order/new.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/show", name="app_order_show", methods={"GET", "POST"})
     */
    public function show(Order $order): Response
    {
        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/{id}/{Uid}/edit", name="app_order_edit", methods={"GET", "POST"})
     * @Entity("user", expr="repository.find(Uid)")
     */
    public function edit(Request $request, Order $order, OrderRepository $orderRepository, User $user): Response
    {
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $orderRepository->add($order);
            return $this->redirectToRoute('app_order_index', ['Uid' => $user->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('order/edit.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/{Uid}", name="app_order_delete", methods={"POST"})
     * @Entity("user", expr="repository.find(Uid)")
     */
    public function delete(Request $request, Order $order, OrderRepository $orderRepository, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $order->getId(), $request->request->get('_token'))) {
            $orderRepository->remove($order);
        }

        return $this->redirectToRoute('app_order_index', ['Uid' => $user->getId()], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/checkout/{id}", name="app_order_checkout", methods={"GET", "POST"})
     * @Entity("order", expr="repository.find(id)")
     */
    public function checkout(Order $order): Response
    {

        Stripe::setApiKey('sk_test_51KtDayHoiDV0jAPI5ajYwaeHkjkYsP6xhwKY8mpa2Qwhd0vVuCXtxlHetTwilEH6A65l3ZA3hSbySfzZm9L67tiZ007lQyrfT8');
        $session = Session::create([
            'customer_email' => $order->getOwner(),
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $order->getFood()->getName(),
                    ],
                    'unit_amount' => ($order->getTotal() / $order->getQty()) * 100,
                ],
                'quantity' => $order->getQty(),
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', ['Oid' => $order->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', ['Oid' => $order->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
        ]);
        return $this->redirect($session->url, 303);
    }

    /**
     * @Route("/success-url/{Oid}", name="success_url")
     * @Entity("order", expr="repository.find(Oid)")
     */
    public function success(Order $order, OrderRepository $orderRepository): Response
    {
        $order->setIsPayed(true);
        $orderRepository->add($order);
        $this->addFlash('success', 'success payment!');
        return $this->redirectToRoute('app_order_index', ['Uid' => $order->getOwner()->getId()]);
    }

    /**
     * @Route("/cancel-url{Oid}", name="cancel_url")
     * @Entity("order", expr="repository.find(Oid)")
     */
    public function cancel(Order $order): Response
    {
        $this->addFlash('danger', 'Faild payment!');
        return $this->redirectToRoute('app_order_index', ['Uid' => $order->getOwner()->getId()]);
        return $this->render('index.html.twig', []);
    }
}
