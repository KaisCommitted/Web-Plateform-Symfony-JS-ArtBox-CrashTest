<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Interactions;
use App\Entity\Participant;
use App\Entity\Postes;
use App\Entity\User;
use App\Form\InteractionsType;
use App\Repository\CommentEventRepository;
use App\Repository\CommentsRepository;
use App\Repository\EvenementRepository;
use App\Repository\InteractionsRepository;
use App\Repository\ParticipantRepository;
use App\Repository\PostesRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/interactions")
 */
class InteractionsController extends AbstractController
{
    /**
     * @Route("/", name="interactions_index", methods={"GET"})
     */
    public function index(): Response
    {
        $interactions = $this->getDoctrine()
            ->getRepository(Interactions::class)
            ->findAll();

        return $this->render('interactions/index.html.twig', [
            'interactions' => $interactions,
        ]);
    }

    /**
     * @Route("/new", name="interactions_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $interaction = new Interactions();
        $form = $this->createForm(InteractionsType::class, $interaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($interaction);
            $entityManager->flush();

            return $this->redirectToRoute('interactions_index');
        }

        return $this->render('interactions/new.html.twig', [
            'interaction' => $interaction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idInter}", name="interactions_show", methods={"GET"})
     */
    public function show(Interactions $interaction): Response
    {
        return $this->render('interactions/show.html.twig', [
            'interaction' => $interaction,
        ]);
    }

    /**
     * @Route("/{idInter}/edit", name="interactions_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Interactions $interaction): Response
    {
        $form = $this->createForm(InteractionsType::class, $interaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('interactions_index');
        }

        return $this->render('interactions/edit.html.twig', [
            'interaction' => $interaction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idInter}", name="interactions_delete", methods={"POST"})
     */
    public function delete(Request $request, Interactions $interaction): Response
    {
        if ($this->isCsrfTokenValid('delete'.$interaction->getIdInter(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($interaction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('interactions_index');
    }



    /**
     * @Route("/newTrying/new", name="comment_newTrying", methods={"GET","POST"})
     */
    public function newTrying(Request $request,CommentsRepository $CommentsRepository,PostesController $PostesController,InteractionsRepository $InteractionsRepository,PostesRepository $PostesRepository, UserRepository $userRepository)
    {

        $data=$request->get('myEvent');

        $poste = new Postes();
        $poste = $PostesRepository->findOneBy(['idPost' => $data]);
        $user= new User();
        $user = $userRepository->findOneBy(['username' => 'kais']);
        $interaction = new Interactions();
        $interaction->setIdPost($poste);
        $interaction->setIdUser($user);
        $interaction->setLikeCheck(0);

        if ( ($InteractionsRepository->findOneBy(['likeCheck' => $interaction->getLikecheck()])  ))
        {   $interaction =  $InteractionsRepository->findOneBy(['likeCheck' => $interaction->getLikecheck()]) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($interaction);
            $entityManager->flush();
            $PostesController->UpdateCancel($poste);


        } else {


            $PostesController->UpdateJoin($poste);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($poste);
            $entityManager->flush();

        }

        $comments = $CommentsRepository->findBy(['idPost' => $poste->getIdPost()]);
        return $this->render('postes/index.html.twig', [
            'poste' => $poste,
            'comments' => $comments,
        ]);
    }





}
