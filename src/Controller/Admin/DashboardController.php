<?php

namespace App\Controller\Admin;

use App\Repository\CategoryRepository;
use App\Repository\FoodRepository;
use App\Repository\OrderRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin_dashboard")
     */
    public function index(OrderRepository $orderRepo, FoodRepository $foodRepo, UserRepository $userRepo, RestaurantRepository $restaurantRepo, CategoryRepository $categoryRepo): Response
    {
        $users = count($userRepo->findAll());
        $visitors = $users * 3;
        $orders = count($orderRepo->findAll());
        $delivred = count($orderRepo->findBy(['isDelivred' => true])) * 100 / $orders;
        $orderPayed = $orderRepo->findBy(['isPayed' => true]);
        $payed = count($orderPayed) * 100 / $orders;
        $incoms = 0;
        for ($i = 0; $i < count($orderPayed); $i++) {
            $incoms = $incoms + $orderPayed[$i]->getTotal();
        }
        $restaurants = count($restaurantRepo->findAll());
        $admins = $restaurants;
        $foods = count($foodRepo->findAll());
        $categories = count($categoryRepo->findAll());
        return $this->render('admin/index.html.twig', [
            'users' => $users, 'visitors' => $visitors, 'orders' => $orders, 'delivred' => $delivred, 'payed' => $payed,
            'incoms' => $incoms, 'restaurants' => $restaurants, 'admins' => $admins, 'foods' => $foods, 'categories' => $categories
        ]);
    }
}
