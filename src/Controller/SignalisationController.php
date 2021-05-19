<?php

namespace App\Controller;

use App\Entity\Signalisation;
use App\Form\SignalisationType;
use App\Repository\EvenementRepository;
use App\Repository\SignalisationRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Annotation\Groups;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;


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
        $signalisation = $this->getDoctrine()
            ->getRepository(Signalisation::class)
            ->findAll();

        return $this->render('signalisation/index.html.twig', [
            'signalisations' => $signalisation,
        ]);
    }

    /**
     * @Route("/displaySignalisation", name="display_signalisation")
     */
    public function AllsignalAction(SignalisationRepository $SignalisationRepository, SerializerInterface $serializerInterface): JsonResponse
    {
        $S = $SignalisationRepository->findAll();
        $serializer = new Serializer(
            array(
                new DateTimeNormalizer(array('datetime_format' => 'Y-m-d')),
                new ObjectNormalizer()
            )
        );





        $json = $serializer->normalize($S , 'json', [AbstractNormalizer::ATTRIBUTES => ['idSignal','contenuSignal','typeSignal','etatSignal','dateSignal','idUser','idPost']]);



        return new JsonResponse($json);
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
     * @Route("/addSignalisation", name="add_signalisation")
     */
    public function addSignalisation(Request $request)
    {
        $signalisation = new Signalisation();
        $contenuSignal = $request->query->get("contenuSignal");
        $typeSignal = $request->query->get("typeSignal");
        $em = $this->getDoctrine()->getManager();
        $dateSignal = new \DateTime('now');

        $signalisation->setContenuSignal($contenuSignal);
        $signalisation->setTypeSignal($typeSignal);
        $signalisation->setEtatSignal("Non traité");
        $signalisation->setDateSignal($dateSignal);

        $em->persist($signalisation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Report added successfully");
        return new JsonResponse($formatted);

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
     * @Route("/detailSignalisation", name="detail_signalisation")
     * @Method("GET")
     */

    //Detail Signalisation
    public function detailSignalisation(Request $request)
    {
        $idSignal = $request->get("idSignal");

        $em = $this->getDoctrine()->getManager();
        $signalisation = $this->getDoctrine()->getManager()->getRepository(Signalisation::class)->find($idSignal);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($contenuSignal) {
            return $contenuSignal->getContenuFeedback();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($signalisation);
        return new JsonResponse($formatted);
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
     * @Route("/updateSignalisation", name="update_signalisation", methods={"PUT"})
     */
    public function editSignalisation(Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();
        $signalisation = $this->getDoctrine()->getManager()
            ->getRepository(Signalisation::class)
            ->find($request->get("idSignal"));

        $signalisation->setContenuSignal($request->get("contenuSignal"));
        $signalisation->setTypeSignal($request->get("typeSignal"));

        $em->persist($signalisation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($signalisation);
        return new JsonResponse("Signalisation was successfully updated.");
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
     * @Route("/deleteSignalisation", name="delete_signalisation", methods={"DELETE"})
     */
    public function deleteSignalisation(Request $request): JsonResponse
    {
        $idSignal = $request->get("idSignal");

        $em = $this->getDoctrine()->getManager();
        $signalisation = $em->getRepository(Signalisation::class)->find($idSignal);
        if($signalisation!=null ) {
            $em->remove($signalisation);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Signalisation successfully deleted.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("Invalid ID.");

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

        return $this->render('signalisation/back.index.html.twig', [
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
