<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Postes;
use App\Form\PostesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
Use Sentiment\Analyzer;

/**
 * @Route("/postes")
 */
class PostesController extends AbstractController
{
    /**
     * @Route("/", name="postes_index", methods={"GET"})
     */
    public function index(): Response
    {
        $postes = $this->getDoctrine()
            ->getRepository(Postes::class)
            ->findAll();

        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/index.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);
    }

    /**
     * @Route("/new", name="postes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $poste = new Postes();

        $poste->setPostDate($poste->getPostDate());
        $form = $this->createForm(PostesType::class, $poste);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $poste->upload();

            $analyzer = new Analyzer();

             $a = array("neg => ", "new =>  ", "pos =>  ","compound =>  ");
             $b = $analyzer->getSentiment($poste->getDescription());

             $output_text =  array_combine($a,$b);


            $json = json_encode( $output_text);
            $poste->setDescAnalys($json );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($poste);
            $entityManager->flush();

            return $this->redirectToRoute('postes_index');
        }

        return $this->render('postes/new.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPost}", name="postes_show", methods={"GET"})
     */
    public function show(Postes $poste): Response
    {
        return $this->render('postes/show.html.twig', [
            'poste' => $poste,
        ]);
    }

    /**
     * @Route("/{idPost}/edit", name="postes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Postes $poste): Response
    {
        $form = $this->createForm(PostesType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('postes_index');
        }

        return $this->render('postes/edit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPost}", name="postes_delete", methods={"POST"})
     */
    public function delete(Request $request, Postes $poste): Response
    {
        if ($this->isCsrfTokenValid('delete'.$poste->getIdPost(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($poste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('postes_index');
    }





    /**
     * @Route("/TriCat/show", name="poste_cat", methods={"POST"})
     */
    public function FindByCategorie(EntityManagerInterface $em,Request $request): Response
    {
        $data=$request->get('myText');
        $queryBuilder = $em->getRepository(Postes::class)->createQueryBuilder('E');
        $queryBuilder->andWhere('E.categorie = :cat');
        $queryBuilder->setParameter('cat', $data);
        $postes = $queryBuilder->getQuery()->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/index.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);
    }


    /**
     * @Route("/", name="poste_search", methods={"POST"})
     */
    public function search(PostesRepository $posteRepo, Request $request)
    {
        $data=$request->get('mots');
        $postes = $posteRepo->search($data);
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/index.html.twig', [
            'postes' => $postes, 'categories' => $categories,
        ]);
    }





    public function AddLike(Postes $post)
    {
        $part = $pos->getLikes();
        $part = $part +1 ;
        $post->setLikes($part);

        $this->getDoctrine()->getManager()->flush();


    }

    public function CancelLike(Postes $post)
    {
        $part = $post->getLikes();
        $part = $part -1 ;
        $evenement->setLikes($part);

        $this->getDoctrine()->getManager()->flush();


    }

    /**
     * @Route("/tri/triTrending", name="postes_triTrending")
     */
    public function TriTrending(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Postes E 
            ORDER BY E.likes DESC'
        );

        $postes = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/index.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);

    }



    /**
     * @Route("/tri/triDate", name="postes_triDate")
     */
    public function TriDate(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT P FROM App\Entity\Postes P
            ORDER BY P.postDate DESC'
        );

        $postes = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/index.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);

    }








    /**
     * @Route("/back/index", name="postes_back_index", methods={"GET"})
     */
    public function indexback(): Response
    {
        $postes = $this->getDoctrine()
            ->getRepository(Postes::class)
            ->findAll();

        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/backindex.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);
    }

    /**
     * @Route("/back/new", name="postes_back_new", methods={"GET","POST"})
     */
    public function newback(Request $request): Response
    {
        $poste = new Postes();

        $poste->setPostDate($poste->getPostDate());
        $form = $this->createForm(PostesType::class, $poste);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            $poste->upload();

            $analyzer = new Analyzer();

            $a = array("neg => ", "new =>  ", "pos =>  ","compound =>  ");
            $b = $analyzer->getSentiment($poste->getDescription());

            $output_text =  array_combine($a,$b);


            $json = json_encode( $output_text);
            $poste->setDescAnalys($json );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($poste);
            $entityManager->flush();

            return $this->redirectToRoute('postes_back_index');
        }

        return $this->render('postes/backnew.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idPost}", name="postes_back_show", methods={"GET"})
     */
    public function showback(Postes $poste): Response
    {
        return $this->render('postes/backshow.html.twig', [
            'poste' => $poste,
        ]);
    }

    /**
     * @Route("/back/{idPost}/edit", name="postes_back_edit", methods={"GET","POST"})
     */
    public function editback(Request $request, Postes $poste): Response
    {
        $form = $this->createForm(PostesType::class, $poste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('postes_back_index');
        }

        return $this->render('postes/backedit.html.twig', [
            'poste' => $poste,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idPost}", name="postes_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, Postes $poste): Response
    {
        if ($this->isCsrfTokenValid('delete'.$poste->getIdPost(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($poste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('postes_back_index');
    }





    /**
     * @Route("/back/TriCat/show", name="poste_back_cat", methods={"POST"})
     */
    public function FindByCategorieback(EntityManagerInterface $em,Request $request): Response
    {
        $data=$request->get('myText');
        $queryBuilder = $em->getRepository(Postes::class)->createQueryBuilder('E');
        $queryBuilder->andWhere('E.categorie = :cat');
        $queryBuilder->setParameter('cat', $data);
        $postes = $queryBuilder->getQuery()->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/backindex.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);
    }


    /**
     * @Route("/back", name="poste_back_search", methods={"POST"})
     */
    public function searchback(PostesRepository $posteRepo, Request $request)
    {
        $data=$request->get('mots');
        $postes = $posteRepo->search($data);
        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/backindex.html.twig', [
            'postes' => $postes, 'categories' => $categories,
        ]);
    }







    /**
     * @Route("/back/tri/triTrending", name="postes_back_triTrending")
     */
    public function backTriTrending(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT E FROM App\Entity\Postes E 
            ORDER BY E.likes DESC'
        );

        $postes = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/backindex.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);

    }



    /**
     * @Route("/back/tri/triDate", name="postes_back_triDate")
     */
    public function backTriDate(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT P FROM App\Entity\Postes P
            ORDER BY P.postDate DESC'
        );

        $postes = $query->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('postes/backindex.html.twig', [
            'postes' => $postes,'categories' => $categories,
        ]);

    }



















}
