<?php

namespace App\Controller;

use App\Entity\Signalisation;
use App\Form\SignalisationType;
use App\Repository\SignalisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/signalisation")
 */
class SignalisationController extends AbstractController
{
    /**
     * @Route("/", name="signalisation_index", methods={"GET"})
     */
    public function index(): Response
    {
        $signalisations = $this->getDoctrine()
            ->getRepository(Signalisation::class)
            ->findAll();

        return $this->render('signalisation/index.html.twig', [
            'signalisations' => $signalisations,
        ]);
    }

    /**
     * @Route("/new", name="signalisation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $signalisation = new Signalisation();
        $form = $this->createForm(SignalisationType::class, $signalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($signalisation);
            $entityManager->flush();

            return $this->redirectToRoute('signalisation_index');
        }

        return $this->render('signalisation/new.html.twig', [
            'signalisation' => $signalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSignal}", name="signalisation_show", methods={"GET"})
     */
    public function show(Signalisation $signalisation): Response
    {
        return $this->render('signalisation/show.html.twig', [
            'signalisation' => $signalisation,
        ]);
    }

    /**
     * @Route("/{idSignal}/edit", name="signalisation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Signalisation $signalisation): Response
    {
        $form = $this->createForm(SignalisationType::class, $signalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('signalisation_index');
        }

        return $this->render('signalisation/edit.html.twig', [
            'signalisation' => $signalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSignal}", name="signalisation_delete", methods={"POST"})
     */
    public function delete(Request $request, Signalisation $signalisation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$signalisation->getIdSignal(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($signalisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('signalisation_index');
    }

    /**
     * @route("/S/stat",name="sta")
     */
    public function statisti(SignalisationRepository $repository)
    {

        $opp=$repository->findAll();


        return $this->render("signalisation/statistique.html.twig",['signalisation'=>$opp]);

    }
    /**
     * @Route("/back/index", name="signalisation_back_index", methods={"GET"})
     */
    public function indexback(): Response
    {
        $signalisations = $this->getDoctrine()
            ->getRepository(Signalisation::class)
            ->findAll();

        return $this->render('signalisation/index.html.twig', [
            'signalisations' => $signalisations,
        ]);
    }

    /**
     * @Route("/back/new", name="signalisation_back_new", methods={"GET","POST"})
     */
    public function newback(Request $request): Response
    {
        $signalisation = new Signalisation();
        $form = $this->createForm(SignalisationType::class, $signalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($signalisation);
            $entityManager->flush();

            return $this->redirectToRoute('signalisation_back_index');
        }

        return $this->render('signalisation/back.new.html.twig', [
            'signalisation' => $signalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idSignal}", name="signalisation_back_show", methods={"GET"})
     */
    public function showback(Signalisation $signalisation): Response
    {
        return $this->render('signalisation/back.show.html.twig', [
            'signalisation' => $signalisation,
        ]);
    }

    /**
     * @Route("/back/{idSignal}/edit", name="signalisation_back_edit", methods={"GET","POST"})
     */
    public function editback(Request $request, Signalisation $signalisation): Response
    {
        $form = $this->createForm(SignalisationType::class, $signalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('signalisation_back_index');
        }

        return $this->render('signalisation/back.edit.html.twig', [
            'signalisation' => $signalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idSignal}", name="signalisation_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, Signalisation $signalisation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$signalisation->getIdSignal(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($signalisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('signalisation_back_index');
    }
}
