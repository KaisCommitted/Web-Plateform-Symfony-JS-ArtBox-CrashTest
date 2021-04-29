<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Entity\User;
use App\Form\PartenaireFrontType;
use App\Form\PartenaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/partenaire")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire_index", methods={"GET"})
     */
    public function index(): Response
    {


        $partenaires = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findAll();

        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }

    /**
     * @Route("/new", name="partenaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $partenaire = new Partenaire();
        $partenaires = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findAll();
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['idUser' => '18']);
        $form = $this->createForm(PartenaireFrontType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $partenaire->upload();
            $partenaire->setIdUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();
            $session= $this->get('session');
            if (!$session->has('user')) {
                $session->set('user',array());
            $session->set('user',18); }
            $user=$session->get('user');

            return $this->render('partenaire/index.html.twig', [
                'partenaires' => $partenaires,
            ]);
        }

        return $this->render('partenaire/new.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
            'partenaires' => $partenaires,
        ]);
    }

    /**
     * @Route("/{idPart}", name="partenaire_show", methods={"GET"})
     */
    public function show(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

    /**
     * @Route("/{idPart}/edit", name="partenaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Partenaire $partenaire): Response
    {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPart}", name="partenaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Partenaire $partenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getIdPart(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenaire_index');
    }

    /**
     * @Route("/back/index", name="partenaire_back_index", methods={"GET"})
     */
    public function indexback(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT P FROM App\Entity\Partenaire P'
        );
        $MostSuccesful = $query->getResult();
        $partner = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            var_dump($evenement);
//            die();
            $partner->upload();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partner);
            $entityManager->flush();
        }
        $partners = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findAll();


        return $this->render('partenaire/backindex.html.twig', [
            'partners' => $partners, 'form' => $form->createView(),'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/back/new", name="partenaire_back_new", methods={"GET","POST"})
     */
    public function newback(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $partner = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $partner->upload();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partner);
            $entityManager->flush();

            return $this->redirectToRoute('partenaire_back_index');
        }

        return $this->render('partenaire/backnew.html.twig', [
            'partner' => $partner,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/back/{id}", name="partenaire_back_show", methods={"GET"})
     */
    public function showback(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/backshow.html.twig', [
            'partner' => $partenaire,
        ]);
    }

    /**
     * @Route("/back/{id}/edit", name="partenaire_back_edit", methods={"GET","POST"})
     */
    public function editback(Request $request, Partenaire $partenaire): Response
    {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $partenaire->upload();
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('partenaire_back_index');
        }

        return $this->render('partenaire/backedit.html.twig', [
            'partner' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{id}", name="partenaire_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, Partenaire $partenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getIdPart(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('partenaire_back_index');
    }

}
