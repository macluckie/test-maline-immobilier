<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Apartment;
use App\Form\ApartmentType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\ApartmentService;


class ApartmentController extends AbstractController
{
    private $apartmentService;

    public function __construct(ApartmentService $apartmentService)
    {
        $this->apartmentService = $apartmentService;
    }
    
    /**
     * @Route("/", name="apartment", methods={"GET"})
     */
    public function index(EntityManagerInterface $em): Response
    {
        $apartments = $em->getRepository(Apartment::class)->findAll();
        return $this->render('apartment/index.html.twig', ['apartments' => $apartments]);
    }


    /**
     * @Route("/apartment", name="apartment_handle" , methods={"GET","POST"})
     */
    public function create(Request $request, EntityManagerInterface $em): Response
    {        
        $apartment = $this->apartmentService->apartment($request);
        $form = $this->createForm(ApartmentType::class, $apartment);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $apartment =  $this->apartmentService->uploadFile($form);
            $em->persist($apartment);
            $em->flush();

            return $this->redirectToRoute('apartment');
        }
        return $this->render('apartment/create/index.html.twig', ['form' => $form->createView()]);
    }

}
