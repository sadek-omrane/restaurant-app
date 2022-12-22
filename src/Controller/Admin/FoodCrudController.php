<?php

namespace App\Controller\Admin;

use App\Entity\Food;
use App\Form\FoodType;
use App\Repository\FoodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/admin/food/crud")
 */
class FoodCrudController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_food_crud_index", methods={"GET"})
     */
    public function index(FoodRepository $foodRepository): Response
    {
        $user = $this->getUser();
        if (in_array("ROLE_SUPER_ADMIN", $this->getUser()->getRoles()))
            return $this->render('admin/food_crud/index.html.twig', [
                'food' => $foodRepository->findAll()
            ]);
        return $this->render('admin/food_crud/index.html.twig', [
            'food' => $foodRepository->findBy(['restaurant' => $user->getRestaurant()]),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_food_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FoodRepository $foodRepository, SluggerInterface $slugger): Response
    {
        $food = new Food();
        $form = $this->createForm(FoodType::class, $food);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $food->setRestaurant($this->getUser()->getRestaurant());
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
                $food->setImage($newFilename);
            }
            $foodRepository->add($food);
            return $this->redirectToRoute('app_admin_food_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/food_crud/new.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_food_crud_show", methods={"GET"})
     */
    public function show(Food $food): Response
    {
        return $this->render('admin/food_crud/show.html.twig', [
            'food' => $food,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_food_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Food $food, FoodRepository $foodRepository, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(FoodType::class, $food);
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
                $food->setImage($newFilename);
            }
            $foodRepository->add($food);
            return $this->redirectToRoute('app_admin_food_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/food_crud/edit.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_food_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Food $food, FoodRepository $foodRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $food->getId(), $request->request->get('_token'))) {
            $foodRepository->remove($food);
        }

        return $this->redirectToRoute('app_admin_food_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
