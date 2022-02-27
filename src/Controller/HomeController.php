<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Partenaire;
use App\Form\AnnonceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="annonce_index", methods={"GET"})
     */
    public function index(): Response
    {
        $partenaires = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findBy(array('status' => "Approved"));
        return $this->render('base.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }


}
