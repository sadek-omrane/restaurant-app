<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use App\Form\Order1Type;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/order/crud")
 */
class OrderCrudController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_order_crud_index", methods={"GET"})
     */
    public function index(OrderRepository $orderRepository): Response
    {
        if (in_array("ROLE_SUPER_ADMIN", $this->getUser()->getRoles()))
            return $this->render('admin/order_crud/index.html.twig', [
                'orders' => $orderRepository->findAll()
            ]);
        return $this->render('admin/order_crud/index.html.twig', [
            'orders' => $orderRepository->findBy(['restaurant' => $this->getUser()->getRestaurant()]),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_order_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, OrderRepository $orderRepository): Response
    {
        $order = new Order();
        $form = $this->createForm(Order1Type::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order->setRestaurant($this->getUser()->getRestaurant());
            $orderRepository->add($order);
            return $this->redirectToRoute('app_admin_order_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/order_crud/new.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_order_crud_show", methods={"GET"})
     */
    public function show(Order $order): Response
    {
        return $this->render('admin/order_crud/show.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_order_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Order $order, OrderRepository $orderRepository): Response
    {
        $form = $this->createForm(Order1Type::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($order->getIsDelivred() && !$order->getIsPayed()) {
                $this->addFlash('danger', 'You can t deliver order wish is not payed!');
                return $this->redirectToRoute('app_admin_order_crud_index', [], Response::HTTP_SEE_OTHER);
            }
            $orderRepository->add($order);
            return $this->redirectToRoute('app_admin_order_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/order_crud/edit.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }


    /**
     * @Route("/{id}", name="app_admin_order_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Order $order, OrderRepository $orderRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $order->getId(), $request->request->get('_token'))) {
            $orderRepository->remove($order);
        }

        return $this->redirectToRoute('app_admin_order_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
