<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Categorie;
use App\Form\AnnonceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/annonce")
 */
class AnnonceController extends AbstractController
{

    /**
     * @Route("/", name="annonce_index", methods={"GET"})
     */
    public function index(): Response
    {
        $annonces = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    /**
     * @Route("/new", name="annonce_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('annonce_index');
        }

        return $this->render('annonce/new.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAnn}", name="annonce_show", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        return $this->render('annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    /**
     * @Route("/{idAnn}/edit", name="annonce_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Annonce $annonce): Response
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annonce_index');
        }

        return $this->render('annonce/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAnn}", name="annonce_delete", methods={"POST"})
     */
    public function delete(Request $request, Annonce $annonce): Response
    {
        if ($this->isCsrfTokenValid('delete' . $annonce->getIdAnn(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annonce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('annonce_index');
    }


    /**
     * @Route("/back/index", name="annonce_back_index", methods={"GET"})
     */
    public function indexback(): Response
    {
        $annonces = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    /**
     * @Route("/back/new", name="annonce_back_new", methods={"GET","POST"})
     */
    public function newback(Request $request): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('annonce_index');
        }

        return $this->render('annonce/backnew.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idAnn}", name="annonce_back_show", methods={"GET"})
     */
    public function showback(Annonce $annonce): Response
    {
        return $this->render('annonce/backshow.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    /**
     * @Route("/back/{idAnn}/edit", name="annonce_back_edit", methods={"GET","POST"})
     */
    public function editback(Request $request, Annonce $annonce): Response
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annonce_back_index');
        }

        return $this->render('annonce/backedit.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idAnn}", name="annonce_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, Annonce $annonce): Response
    {
        if ($this->isCsrfTokenValid('delete' . $annonce->getIdAnn(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annonce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('annonce_back_index');
    }


    /**
     * @Route("/tri/triDate", name="annonce_triDate")
     */
    public function TriDate(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT A FROM App\Entity\Annonce A
            ORDER BY A.date ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/tri/triAlphabetical", name="annonce_triAlphabetical")
     */
    public function TriAlphabetical(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT A FROM App\Entity\Annonce A
            ORDER BY A.titreAnn ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }


    /**
     * @Route("/tri/triOrganizer", name="annonce_triOrganizer")
     */
    public function TriOrganizer(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            ORDER BY E.idUser ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/filter/ThisMonth", name="annonce_ThisMonth")
     */
    public function FilterThisMonth(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())<30 AND DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0 '
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/filter/Today", name="annonce_Today")
     */
    public function FilterToday(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())=0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/filter/ThisWeek", name="annonce_ThisWeek")
     */
    public function FilterThisWeek(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
                WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())<7 AND DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/filter/Upcoming", name="annonce_Upcoming")
     */
    public function FilterUpcoming(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }


    /**
     * @Route("/TriCat/show", name="annonce_cat", methods={"POST"})
     */
    public function FindByCategorie(EntityManagerInterface $em, Request $request): Response
    {
        $data = $request->get('myText');
        $queryBuilder = $em->getRepository(Annonce::class)->createQueryBuilder('E');
        $queryBuilder->andWhere('E.categorie = :cat');
        $queryBuilder->setParameter('cat', $data);
        $annonces = $queryBuilder->getQuery()->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);
    }


    /**
     * @Route("/back/tri/triDate", name="annonce_back_triDate")
     */
    public function TriBackDate(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            ORDER BY E.ddlAnn ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/tri/triAlphabetical", name="annonce_back_triAlphabetical")
     */
    public function TriBackAlphabetical(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            ORDER BY E.titreAnn ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }


    /**
     * @Route("/back/tri/triOrganizer", name="annonce_back_triOrganizer")
     */
    public function TriBackOrganizer(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            ORDER BY E.idUser ASC'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/filter/ThisMonth", name="annonce_back_ThisMonth")
     */
    public function FilterBackThisMonth(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())<30 AND DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0 '
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/filter/Today", name="annonce_back_Today")
     */
    public function FilterBackToday(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())=0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/filter/ThisWeek", name="annonce_back_ThisWeek")
     */
    public function FilterBackThisWeek(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
                WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())<7 AND DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/filter/Upcoming", name="annonce_back_Upcoming")
     */
    public function FilterBackUpcoming(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())>0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }

    /**
     * @Route("/back/filter/HasPassed", name="annonce_back_HasPassed")
     */
    public function FilterBackHasPassed(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Annonce E 
            WHERE DATE_DIFF(E.ddlAnn,CURRENT_DATE())<0'
        );

        $annonces = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('annonce/backindex.html.twig', [
            'annonces' => $annonces, 'categories' => $categories,
        ]);

    }
}