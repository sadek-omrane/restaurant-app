<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use App\Form\Booking1Type;
use App\Repository\BookingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/booking/crud")
 */
class BookingCrudController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_booking_crud_index", methods={"GET"})
     */
    public function index(BookingRepository $bookingRepository): Response
    {
        if (in_array("ROLE_SUPER_ADMIN", $this->getUser()->getRoles()))
            return $this->render('admin/booking_crud/index.html.twig', [
                'bookings' => $bookingRepository->findAll()
            ]);

        return $this->render('admin/booking_crud/index.html.twig', [
            'bookings' => $bookingRepository->findBy(['restaurant' => $this->getUser()->getRestaurant()]),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_booking_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, BookingRepository $bookingRepository): Response
    {
        $booking = new Booking();
        $form = $this->createForm(Booking1Type::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->add($booking);
            return $this->redirectToRoute('app_admin_booking_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/booking_crud/new.html.twig', [
            'booking' => $booking,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_booking_crud_show", methods={"GET"})
     */
    public function show(Booking $booking): Response
    {
        return $this->render('admin/booking_crud/show.html.twig', [
            'booking' => $booking,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_booking_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Booking $booking, BookingRepository $bookingRepository): Response
    {
        $form = $this->createForm(Booking1Type::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->add($booking);
            return $this->redirectToRoute('app_admin_booking_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/booking_crud/edit.html.twig', [
            'booking' => $booking,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_booking_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Booking $booking, BookingRepository $bookingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $booking->getId(), $request->request->get('_token'))) {
            $bookingRepository->remove($booking);
        }

        return $this->redirectToRoute('app_admin_booking_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
