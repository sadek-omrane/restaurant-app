<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Category;
use App\Entity\Food;
use App\Entity\Restaurant;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request, BookingRepository $bookingRepository): Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);
        $booking->setOwner($this->getUser());
        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->add($booking);
            return $this->redirectToRoute('app_booking_index', [], Response::HTTP_SEE_OTHER);
        }
        $restRepository = $this->getDoctrine()->getRepository(Restaurant::class);
        $restaurants = $restRepository->findAll();
        $categRepository = $this->getDoctrine()->getRepository(Category::class);
        $categories = $categRepository->findAll();
        $foodRepository = $this->getDoctrine()->getRepository(Food::class);
        $features = $foodRepository->findBy(['isFeatured' => 1]);
        $promotions = $foodRepository->findBy(['isPromoted' => 1]);
        return $this->renderForm('home/index.html.twig', ['restaurants' => $restaurants, 'categories' => $categories, 'features' => $features, 'promotions' => $promotions, 'booking' => $booking, 'form' => $form]);
    }

    /**
     * @Route("/restaurant/{id}", name="restaurant")
     * @Entity("restaurant", expr="repository.find(id)")
     */
    public function restaurant(Restaurant $restaurant): Response
    {
        $categRepository = $this->getDoctrine()->getRepository(Category::class);
        /*$foodRepository = $this->getDoctrine()->getRepository(Food::class);
        $foods = $foodRepository->findAll();*/
        $categories = $categRepository->findAll();
        $foods = $restaurant->getFoods();
        return $this->render('home/restaurant/restaurant.html.twig', ['foods' => $foods, 'categories' => $categories, 'restaurant' => $restaurant]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {

        return $this->render('home/about/about.html.twig', []);
    }
}
