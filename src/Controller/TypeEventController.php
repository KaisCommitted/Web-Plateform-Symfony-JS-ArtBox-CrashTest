<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\TypeEvent;
use App\Form\TypeEventType;
use App\Repository\CategorieRepository;
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

/**
 * @Route("/type/event")
 */
class TypeEventController extends AbstractController
{
    /**
     * @Route("/", name="type_event_index", methods={"GET"})
     */
    public function index(): Response
    {
        $typeEvents = $this->getDoctrine()
            ->getRepository(TypeEvent::class)
            ->findAll();

        return $this->render('type_event/index.html.twig', [
            'type_events' => $typeEvents,
        ]);
    }

    /**
     * @Route("/new", name="type_event_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeEvent = new TypeEvent();
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeEvent);
            $entityManager->flush();

            return $this->redirectToRoute('type_event_index');
        }

        return $this->render('type_event/new.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{typeName}", name="type_event_show", methods={"GET"})
     */
    public function show(TypeEvent $typeEvent): Response
    {
        return $this->render('type_event/show.html.twig', [
            'type_event' => $typeEvent,
        ]);
    }

    /**
     * @Route("/{typeName}/edit", name="type_event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeEvent $typeEvent): Response
    {
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_event_index');
        }

        return $this->render('type_event/edit.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{typeName}", name="type_event_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeEvent $typeEvent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEvent->getTypeName(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_event_index');
    }


    /**
     * @Route ("/json/displayType", name="display_Type")
     */
    public function getEvent()
    {

        $E = $this->getDoctrine()
            ->getRepository(TypeEvent::class)
            ->findAll();
        $serializer = new Serializer(
            array(
                new DateTimeNormalizer(array('datetime_format' => 'Y-m-d')),
                new ObjectNormalizer()
            )
        );





        $json = $serializer->normalize($E , 'json', [AbstractNormalizer::ATTRIBUTES => ['typeName']]);


        //$json = $serializerInterface->serialize($E, 'json' , ['groups' => 'Events']);
        return new JsonResponse($json);
    }
}
