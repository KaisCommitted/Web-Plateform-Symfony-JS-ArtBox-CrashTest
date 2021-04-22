<?php


namespace App\Controller;
use App\Form\UserType;
use App\Entity\User;
use App\Security\EmailVerifier;
use App\Security\UserAuthAuthenticator;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="user_registration")
     */

    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        //
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // Encode the password (2nd choice : Doctrine listener)
            $user->setPwdUser(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()));


            //  save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

//                $message = (new \Swift_Message('Hello Email'))
//                    ->setFrom('0artbox1@gmail.com')
//                    ->setTo('louay.jeddou@esprit.tn')
//                    ->setBody(
//                        $this->renderView(
//                        // templates/emails/registration.html.twig
//                            'registration/confirmation_email.html.twig',
//
//                        ),
//                        'text/html'
//                    )
//
//                    // you can remove the following code if you don't define a text version for your emails
//                    ->addPart(
//                        $this->renderView(
//                        // templates/emails/registration.txt.twig
//                            'emails/registration.txt.twig',
//
//                        ),
//                        'text/plain'
//                    )
//                ;
//
//                $mailer->send($message);
//
//

            return $this->redirectToRoute('postes_index');
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}