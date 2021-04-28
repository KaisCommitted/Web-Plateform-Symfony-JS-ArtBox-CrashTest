<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\RatingEvent;
use App\Entity\User;
use App\Form\RatingEventType;
use App\Repository\EvenementRepository;
use App\Repository\RatingEventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rating/event")
 */
class RatingEventController extends AbstractController
{
    /**
     * @Route("/", name="rating_event_index", methods={"GET"})
     */
    public function index(): Response
    {
        $ratingEvents = $this->getDoctrine()
            ->getRepository(RatingEvent::class)
            ->findAll();

        return $this->render('rating_event/index.html.twig', [
            'rating_events' => $ratingEvents,
        ]);
    }

    /**
     * @Route("/new", name="rating_event_new", methods={"GET","POST"})
     */
    public function new(Request $request,EvenementController $evenementController,RatingEventRepository $ratingEventRepository,EvenementRepository $evenementRepository, UserRepository $userRepository): Response
    {
        $data=$request->get('ratedEvent');
        $rating = $request->get('noteCopy');
        $evenement = new Evenement();
        $evenement = $evenementRepository->findOneBy(['nomEvent' => $data]);
        $user= new User();
        $user = $userRepository->findOneBy(['username' => 'kais']);
        $ratingEvent = new RatingEvent();
        $ratingEvent->setIdEvent($evenement);
        $ratingEvent->setIdUser($user);
        $ratingEvent->setRating($rating);
        $Exists = $ratingEventRepository->findOneBy(['idUser' => $user->getIdUser() , 'idEvent' => $evenement->getId()]);
        $entityManager = $this->getDoctrine()->getManager();
        if ($Exists)
        {

           $entityManager->remove($Exists);
            $entityManager->persist($ratingEvent);
            $entityManager->flush();

        }else{

            $entityManager->persist($ratingEvent);
            $entityManager->flush();

        }


              $queryBuilder = $entityManager->getRepository(RatingEvent::class)->createQueryBuilder('R');
            $queryBuilder->select('count(R.idRating)');
              $queryBuilder->andWhere('R.idEvent = :cat');
        $queryBuilder->setParameter('cat', $evenement->getId());
        try {
            $ratings = $queryBuilder->getQuery()->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }

        $number= intval($ratings);





 $queryBuilder = $entityManager->getRepository(RatingEvent::class)->createQueryBuilder('R');
            $queryBuilder ->select('SUM(R.rating) as total');
              $queryBuilder->andWhere('R.idEvent = :cat');
        $queryBuilder->setParameter('cat', $evenement->getId());

            try {
                $total = $queryBuilder->getQuery()->getOneOrNullResult();
            } catch (NonUniqueResultException $e) {
            }

            $x= array_values($total)[0];
            $sum=  intval($x)  ;


       $evenementController->UpdateRating($evenement, $sum,$number);


        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{idRating}", name="rating_event_show", methods={"GET"})
     */
    public function show(RatingEvent $ratingEvent): Response
    {
        return $this->render('rating_event/show.html.twig', [
            'rating_event' => $ratingEvent,
        ]);
    }

    /**
     * @Route("/{idRating}/edit", name="rating_event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RatingEvent $ratingEvent): Response
    {
        $form = $this->createForm(RatingEventType::class, $ratingEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rating_event_index');
        }

        return $this->render('rating_event/edit.html.twig', [
            'rating_event' => $ratingEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRating}", name="rating_event_delete", methods={"POST"})
     */
    public function delete(Request $request, RatingEvent $ratingEvent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ratingEvent->getIdRating(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ratingEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rating_event_index');
    }
}
