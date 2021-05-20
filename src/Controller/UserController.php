<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\FeedbackRepository;
use App\Repository\UserRepository;
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
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Annotation\Groups;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

//hello please work

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(): Response
    {
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }


    /**
     * @Route("/displayUser", name="display_user")
     */

    public function getUser(UserRepository $UserRepository, SerializerInterface $serializerInterface)
    {
        $F = $UserRepository->findAll();
        $serializer = new Serializer(
            array(
                new DateTimeNormalizer(array('datetime_format' => 'Y-m-d')),
                new ObjectNormalizer()
            )
        );





        $json = $serializer->normalize($F , 'json', [AbstractNormalizer::ATTRIBUTES => ['id_user','nom','prenom','username','mail','date_naissance','pwd_user','ref_admin','id_label','image','roles']]);


        //$json = $serializerInterface->serialize($F, 'json' , ['groups' => 'User']);
        return new JsonResponse($json);
    }



    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->upload();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/addUser", name="add_user", methods={"GET","POST"})
     */
    public function addUserRequest (Request $request, UserRepository $userRepository)
    {
        $F = new User();
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $username = $request->query->get("username");
        $mail = $request->query->get("mail");
        $date_naissance = $request->query->get("date_naissance");
        $pwd_user = $request->query->get("pwd_user");
        $ref_admin = $request->query->get("ref_admin");
        $id_label = $request->query->get("id_label");
        $image = $request->query->get("image");
        $roles = $request->query->get("roles");
        $isVerified = $request->query->get("isVerified");
        $em = $this->getDoctrine()->getManager();

        $F->setNom($nom);
        $F->setPrenom($prenom);
        $F->setUsername($username);
        $F->setMail($mail);
        $F->setDateNaissance($date_naissance);
        $F->setPwdUser($pwd_user);
        $F->setRefAdmin($ref_admin);
        $F->setIdLabel($id_label);
        $F->setImage($image);
        $F->setRoles($roles);
        $F->setIsVerified($isVerified);
        $em->persist($F);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("User added successfully");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/{idUser}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{idUser}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/updateUser", name="update_user")
     * methods={"PUT"}
     */
    public function editUser(Request $request): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getManager()
            ->getRepository(User::class)
            ->find($request->get("id_user"));

        $user->setNom($request->get("nom"));
        $user->setPrenom($request->get("prenom"));
        $user->setUsername($request->get("username"));
        $user->setMail($request->get("mail"));
        $user->setDatenaissance($request->get("date_naissance"));
        $user->setPwduser($request->get("pwd_user"));
        $user->setRefadmin($request->get("ref_admin"));
        $user->setIdlabel($request->get("id_label"));
        $user->setImage($request->get("image"));
        $user->setRoles($request->get("roles"));
        $user->setIsVerified($request->get("isVerified"));
        $em->persist($user);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("User updated successfully");
        return new JsonResponse($formatted);
    }


    /**
     * @Route("/{idUser}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getIdUser(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }


    /**
     * @Route("/deleteUser", name="delete_user", methods={"DELETE"})
     */
    public function deleteUser(Request $request): JsonResponse
    {
        $id_user = $request->get("id_user");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id_user);
        if($user!=null ) {
            $em->remove($user);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("User successfully deleted.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("Invalid ID.");

    }


    //back-----------------------------------------------------------------------------
    /**
     * @Route("/back/index", name="user_back_index", methods={"GET"})
     */
    public function indexback(): Response
    {
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return $this->render('user/backindex.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/back/new", name="user_back_new", methods={"GET","POST"})
     */
    public function newback(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_back_index');
        }

        return $this->render('user/backnew.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idUser}", name="user_back_show", methods={"GET"})
     */
    public function showback(User $user): Response
    {
        return $this->render('user/backshow.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/back/{idUser}/edit", name="user_back_edit", methods={"GET","POST"})
     */
    public function editback(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_back_index');
        }

        return $this->render('user/backedit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/back/{idUser}", name="user_back_delete", methods={"POST"})
     */
    public function deleteback(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getIdUser(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_back_index');
    }



}