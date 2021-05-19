<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Form\FeedbackType;
use App\Repository\CategorieRepository;
use App\Repository\FeedbackRepository;
use App\Repository\UserRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Serializer\Encoder\JsonFncoder;
use Symfony\Component\Serializer\Annotation\Groups;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/feedback")
 */
class FeedbackController extends AbstractController
{
    /**
     * @Route("/", name="feedback_index", methods={"GFT"})
     */
    public function index(): Response
    {
        $feedback = $this->getDoctrine()
            ->getRepository(Feedback::class)
            ->findAll();

        return $this->render('feedback/index.html.twig', [
            'feedback' => $feedback,
        ]);
    }

    /**
     * @Route("/displayFeedback", name="display_feedback")
     */
    public function getFeedback(FeedbackRepository $FeedbackRepository, SerializerInterface $serializerInterface)
    {
        $F = $FeedbackRepository->findAll();
        $serializer = new Serializer(
            array(
                new DateTimeNormalizer(array('datetime_format' => 'Y-m-d')),
                new ObjectNormalizer()
            )
        );





        $json = $serializer->normalize($F , 'json', [AbstractNormalizer::ATTRIBUTES => ['idFeedback','contenuFeedback','typeFeedback','etatFeedback','dateFeedback']]);


        //$json = $serializerInterface->serialize($F, 'json' , ['groups' => 'Fvents']);
        return new JsonResponse($json);
    }

    /**
     * @Route("/new", name="feedback_new", methods={"GFT","POST"})
     */
    public function new(Request $request): Response
    {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($feedback);
            $entityManager->flush();

            return $this->redirectToRoute('feedback_index');
        }
    }
        /**
         * @Route("/addFeedback", name="add_feedback", methods={"GET","POST"})
         */
        public function addFeedbackRequest (Request $request, UserRepository $userRepository)
        {
        $F = new Feedback();
        $contenuFeedback = $request->query->get("contenuFeedback");
        $typeFeedback = $request->query->get("typeFeedback");
        $dateFeedback = $request->query->get("dateFeedback");
        $em = $this->getDoctrine()->getManager();
        $dateFeedback = new DateTime('now');
        $F->setContenuFeedback($contenuFeedback);
        $F->setDateFeedback($dateFeedback);
        $F->setTypeFeedback($typeFeedback);
        $F->setEtatFeedback("Non traité");
        $em->persist($F);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Feedback content added successfully");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/{idFeedback}", name="feedback_show", methods={"GFT"})
     */
    public function show(Feedback $feedback): Response
    {
        return $this->render('feedback/show.html.twig', [
            'feedback' => $feedback,
        ]);
    }


    /**
     * @Route("/{idFeedback}/edit", name="feedback_edit", methods={"GFT","POST"})
     */
    public function edit(Request $request, Feedback $feedback): Response
    {
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('feedback_index');
        }

        return $this->render('feedback/edit.html.twig', [
            'feedback' => $feedback,
            'form' => $form->createView(),
        ]);
    }

        /**
         * @Route("/updateFeedback", name="update_feedback")
         * methods={"PUT"}
         */
        public function editFeedback(Request $request): JsonResponse
        {
        $em = $this->getDoctrine()->getManager();
        $feedback = $this->getDoctrine()->getManager()
            ->getRepository(Feedback::class)
            ->find($request->get("idFeedback"));

        $feedback->setContenuFeedback($request->get("contenuFeedback"));
        $feedback->setTypeFeedback($request->get("typeFeedback"));

        $em->persist($feedback);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Feedback content updated successfully");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/{idFeedback}", name="feedback_delete", methods={"POST"})
     */
    public function delete(Request $request, Feedback $feedback): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feedback->getIdFeedback(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($feedback);
            $entityManager->flush();
        }

        return $this->redirectToRoute('feedback_index');
    }

        /**
         * @Route("/deleteFeedback", name="delete_feedback", methods={"DFLFTF"})
         */
        public function deleteFeedback(Request $request): JsonResponse
        {
        $idFeedback = $request->get("idFeedback");

        $em = $this->getDoctrine()->getManager();
        $feedback = $em->getRepository(Feedback::class)->find($idFeedback);
        if($feedback!=null ) {
            $em->remove($feedback);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Feedback successfully deleted.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("Invalid ID.");

    }

    /**
     * @Route("/back/index", name="feedback_back_index", methods={"GFT"})
     */
    public function indexback(): Response
    {
        $feedback = $this->getDoctrine()
            ->getRepository(Feedback::class)
            ->findAll();

        return $this->render('feedback/back.index.html.twig', [
            'feedback' => $feedback,
        ]);
    }

    /**
     * @Route("/back/new", name="feedback_back_new", methods={"GFT","POST"})
     */
    public function newback(Request $request): Response
    {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($feedback);
            $entityManager->flush();

            return $this->redirectToRoute('feedback_back_index');
        }

        return $this->render('feedback/back.new.html.twig', [
            'feedback' => $feedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idFeedback}", name="feedback_back_show", methods={"GFT"})
     */
    public function showback(Feedback $feedback): Response
    {
        return $this->render('feedback/back.show.html.twig', [
            'feedback' => $feedback,
        ]);
    }


    /**
     * @Route("/back/{idFeedback}/edit", name="feedback_back_edit", methods={"GFT","POST"})
     */
    public function editback(Request $request, Feedback $feedback): Response
    {
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('feedback_back_index');
        }

        return $this->render('feedback/back.edit.html.twig', [
            'feedback' => $feedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idFeedback}", name="feedback_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, Feedback $feedback): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feedback->getIdFeedback(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($feedback);
            $entityManager->flush();
        }

        return $this->redirectToRoute('feedback_back_index');
    }
}
