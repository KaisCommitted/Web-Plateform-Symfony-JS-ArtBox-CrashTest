<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Evenement;
use App\Entity\Participant;
use App\Form\ParticipantType;
use App\Repository\CommentEventRepository;
use App\Repository\EvenementRepository;
use App\Repository\ParticipantRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participant")
 */
class ParticipantController extends AbstractController
{
    /**
     * @Route("/", name="participant_index", methods={"GET"})
     */
    public function index(): Response
    {
        $participants = $this->getDoctrine()
            ->getRepository(Participant::class)
            ->findAll();

        return $this->render('participant/index.html.twig', [
            'participants' => $participants,
        ]);
    }

    /**
     * @Route("/new/new", name="participant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participant);
            $entityManager->flush();

            return $this->redirectToRoute('participant_index');
        }

        return $this->render('participant/new.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipation}", name="participant_show", methods={"GET"})
     */
    public function show(Participant $participant): Response
    {
        return $this->render('participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    /**
     * @Route("/{idParticipation}/edit", name="participant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Participant $participant): Response
    {
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participant_index');
        }

        return $this->render('participant/edit.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipation}", name="participant_delete", methods={"POST"})
     */
    public function delete(Request $request, Participant $participant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getIdParticipation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participant_index');
    }



    /**
     * @Route("/newTrying/new", name="participant_newTrying", methods={"GET","POST"})
     */
    public function newTrying(Request $request,CommentEventRepository $commentEventRepository,EvenementController $evenementController,ParticipantRepository $participantRepository,EvenementRepository $evenementRepository, UserRepository $userRepository)
    {

        $data=$request->get('myEvent');

        $evenement = new Evenement();
        $evenement = $evenementRepository->findOneBy(['nomEvent' => $data]);
        $user= new User();
        $user = $userRepository->findOneBy(['username' => 'kais']);
        $participant = new Participant();
        $participant->setIdEvent($evenement);
        $participant->setIdUser($user);
        $ticket = '';
        $ticket .= $evenement->getId();
        $ticket .= $user->getIdUser();
        $participant->setTicket($ticket);
        if ( ($participantRepository->findOneBy(['ticket' => $participant->getTicket()])  ))
        {   $participant =  $participantRepository->findOneBy(['ticket' => $participant->getTicket()]) ;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participant);
            $entityManager->flush();
            $evenementController->UpdateCancel($evenement);


        } else {


            $evenementController->UpdateJoin($evenement);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participant);
            $entityManager->flush();

        }

        $comments = $commentEventRepository->findBy(['idEvent' => $evenement->getId()]);
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'comments' => $comments,
        ]);
    }



}
