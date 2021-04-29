<?php

namespace App\Controller;

use App\Entity\CommentEvent;
use App\Entity\Evenement;
use App\Entity\User;
use App\Form\CommentEventType;
use App\Repository\EvenementRepository;
use App\Repository\CommentEventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment/event")
 */
class CommentEventController extends AbstractController
{
    /**
     * @Route("/", name="comment_event_index", methods={"GET"})
     */
    public function index(): Response
    {
        $commentEvents = $this->getDoctrine()
            ->getRepository(CommentEvent::class)
            ->findAll();

        return $this->render('comment_event/index.html.twig', [
            'comment_events' => $commentEvents,
        ]);
    }

    /**
     * @Route("/new", name="comment_event_new", methods={"GET","POST"})
     */
    public function new(Request $request,EvenementController $evenementController,CommentEventRepository $commentEventRepository,EvenementRepository $evenementRepository, UserRepository $userRepository): Response
    {
        $data=$request->get('commentedEvent');
        $comment = $request->get('comment');
        $evenement = new Evenement();
        $evenement = $evenementRepository->findOneBy(['nomEvent' => $data]);
        $user= new User();
        $user = $userRepository->findOneBy(['username' => 'kais']);
        $commentEvent = new CommentEvent();
        $commentEvent->setIdEvent($evenement);
        $commentEvent->setIdUser($user);
        $commentEvent->setContent($comment);
        $Exists = $commentEventRepository->findOneBy(['idUser' => $user->getIdUser() , 'idEvent' => $evenement->getId()]);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commentEvent);
        $entityManager->flush();

     $comments = $commentEventRepository->findBy(['idEvent' => $evenement->getId()]);









        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'comments' => $comments,
        ]);
    }

    /**
     * @Route("/{id}", name="comment_event_show", methods={"GET"})
     */
    public function show(CommentEvent $commentEvent): Response
    {
        return $this->render('comment_event/show.html.twig', [
            'comment_event' => $commentEvent,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="comment_event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CommentEvent $commentEvent): Response
    {
        $form = $this->createForm(CommentEventType::class, $commentEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comment_event_index');
        }

        return $this->render('comment_event/edit.html.twig', [
            'comment_event' => $commentEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete", name="comment_event_delete", methods={"POST"})
     */
    public function delete(Request $request,CommentEventRepository $commentEventRepository,EvenementRepository $evenementRepository)
    {
        $id=$request->get('deletedComment');
        $data=$request->get('deletedEvent');
        $commentEvent = $commentEventRepository->findOneBy(['id' => $id]);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commentEvent);
            $entityManager->flush();



        $evenement = new Evenement();
        $evenement = $evenementRepository->findOneBy(['nomEvent' => $data]);
        $comments = $commentEventRepository->findBy(['idEvent' => $evenement->getId()]);

        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'comments' => $comments,
        ]);
    }
}
