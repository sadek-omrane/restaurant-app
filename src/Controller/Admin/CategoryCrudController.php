<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/category/crud")
 */
class CategoryCrudController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_category_crud_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        if (in_array("ROLE_SUPER_ADMIN", $this->getUser()->getRoles()))
            return $this->render('admin/category_crud/index.html.twig', [
                'categories' => $categoryRepository->findAll()
            ]);
        return $this->render('admin/category_crud/index.html.twig', [
            'categories' => $categoryRepository->findBy(['restaurant' => $user->getRestaurant()]),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_category_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        $categories = [];
        $categs = $categoryRepository->findBy(['restaurant' => $user->getRestaurant()]);
        for ($i = 0; $i < count($categs); $i++) {
            array_push($categories, strtolower($categs[$i]->getName()));
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $category->setRestaurant($this->getUser()->getRestaurant());
            if (in_array(strtolower($category->getName()), $categories)) {
                $this->addFlash('danger', 'Category already exist!');
                return $this->redirectToRoute('app_admin_category_crud_index', [], Response::HTTP_SEE_OTHER);
            }
            $categoryRepository->add($category);
            return $this->redirectToRoute('app_admin_category_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/category_crud/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_category_crud_show", methods={"GET"})
     */
    public function show(Category $category): Response
    {
        return $this->render('admin/category_crud/show.html.twig', [
            'category' => $category,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_category_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->add($category);
            return $this->redirectToRoute('app_admin_category_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/category_crud/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_category_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
            $categoryRepository->remove($category);
        }

        return $this->redirectToRoute('app_admin_category_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
