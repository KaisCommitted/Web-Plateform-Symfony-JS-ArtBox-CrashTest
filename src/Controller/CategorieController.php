<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\EvenementRepository;
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
 * @Route("/categorie")
 */
class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie_index", methods={"GET"})
     */
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }





    /**
     * @Route("/new", name="categorie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorie = new Categorie();
        $catName=$request->get('catName');
        $catImage= $request->get('catImage');


            $categorie->setCategorieName($catName);
            $categorie->setCategorieImage($catImage);
            $categorie->upload();
            $categorie->setStatus("-");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorie);
            $entityManager->flush();


          return $this->redirectToRoute('evenement_index');
    }

    /**
     * @Route("/{categorieName}", name="categorie_show", methods={"GET"})
     */
    public function show(Categorie $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    /**
     * @Route("/{categorieName}/edit", name="categorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categorie $categorie): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorie_index');
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{categorieName}", name="categorie_delete", methods={"POST"})
     */
    public function delete(Request $request, Categorie $categorie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getCategorieName(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_index');
    }



    /**
     * @Route("/back/index", name="categorie_back_index", methods={"GET"})
     */
    public function Backindex(): Response
    {
        $status= "+";
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['status' => $status ]);

        return $this->render('categorie/back_index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/back/suggestion", name="categorie_back_suggestion", methods={"GET"})
     */
    public function BackSuggest(): Response
    {
        $status= "-";
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['status' => $status ]);

        return $this->render('categorie/back_suggest.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/back/new", name="categorie_back_new", methods={"GET","POST"})
     */
    public function Backnew(Request $request): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->upload();
            $categorie->setStatus("+");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_back_index');
        }

        return $this->render('categorie/back_new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{categorieName}", name="categorie_back_show", methods={"GET"})
     */
    public function Backshow(Categorie $categorie): Response
    {
        return $this->render('categorie/back_show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    /**
     * @Route("/back/{categorieName}/edit", name="categorie_back_edit", methods={"GET","POST"})
     */
    public function Backedit(Request $request, Categorie $categorie): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorie_back_index');
        }

        return $this->render('categorie/back_edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{categorieName}", name="categorie_back_delete", methods={"POST"})
     */
    public function Backdelete(Request $request, Categorie $categorie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getCategorieName(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_back_index');
    }


    /**
     * @Route("/back/suggestion/accept", name="categorie_back_accept", methods={"GET","POST"})
     */
    public function BackAccept(Request $request, CategorieRepository  $categorieRepository): Response
    {
        $data=$request->get('AcceptedCat');
        $categorie = $categorieRepository->findOneBy(['categorieName' => $data]);
        $categorie->setStatus("+");

         $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorie);
            $entityManager->persist($categorie);
            $entityManager->flush();

        $status= "-";
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['status' => $status ]);

        return $this->render('categorie/back_suggest.html.twig', [
            'categories' => $categories,
        ]);


    }


    /**
     * @Route("/back/suggestion/refuse", name="categorie_back_refuse", methods={"GET","POST"})
     */
    public function BackRefuse(Request $request, CategorieRepository  $categorieRepository): Response
    {
        $data=$request->get('RefusedCat');
        $categorie = $categorieRepository->findOneBy(['categorieName' => $data]);


        $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorie);
            $entityManager->flush();
        $status= "-";
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['status' => $status ]);

        return $this->render('categorie/back_suggest.html.twig', [
            'categories' => $categories,
        ]);


    }

    /**
     * @Route ("/json/displayCat", name="display_Cat")
     */
    public function getEvent(CategorieRepository $categorieRepository, SerializerInterface $serializerInterface)
    {
        $status= "+";
        $E = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findBy(['status' => $status ]);
        $serializer = new Serializer(
            array(
                new DateTimeNormalizer(array('datetime_format' => 'Y-m-d')),
                new ObjectNormalizer()
            )
        );





        $json = $serializer->normalize($E , 'json', [AbstractNormalizer::ATTRIBUTES => ['categorieName','categorieImage']]);


        //$json = $serializerInterface->serialize($E, 'json' , ['groups' => 'Events']);
        return new JsonResponse($json);
    }
}
