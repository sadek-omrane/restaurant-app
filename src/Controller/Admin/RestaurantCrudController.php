<?php

namespace App\Controller\Admin;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/admin/restaurant/crud")
 */
class RestaurantCrudController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_restaurant_crud_index", methods={"GET"})
     */
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_SUPER_ADMIN');

        return $this->render('admin/restaurant_crud/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_restaurant_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, RestaurantRepository $restaurantRepository, UserRepository $userRespository, SluggerInterface $slugger): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $restaurant->setImage($newFilename);
            }
            $user = $restaurant->getOwner();
            $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
            $userRespository->add($user);
            $restaurantRepository->add($restaurant);
            return $this->redirectToRoute('app_admin_restaurant_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/restaurant_crud/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_restaurant_crud_show", methods={"GET"})
     */
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('admin/restaurant_crud/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_restaurant_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Restaurant $restaurant, RestaurantRepository $restaurantRepository): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $restaurantRepository->add($restaurant);
            return $this->redirectToRoute('app_admin_restaurant_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/restaurant_crud/edit.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_restaurant_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Restaurant $restaurant, RestaurantRepository $restaurantRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $restaurant->getId(), $request->request->get('_token'))) {
            if ($restaurant->getOrders()->count() == 0 && $restaurant->getFoods()->count() == 0 && $restaurant->getCategories()->count() == 0) {
                $restaurantRepository->remove($restaurant);
                $this->addFlash('success', 'Restaurant deleted with success!');
                return $this->redirectToRoute('app_admin_restaurant_crud_index', [], Response::HTTP_SEE_OTHER);
            }
        }
        $this->addFlash('danger', 'Faild delete!');
        return $this->redirectToRoute('app_admin_restaurant_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
