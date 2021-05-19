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
    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
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
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('0artbox1@gmail.com', '0artbox1'))
                    ->to($user->getMail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );


            return $this->redirectToRoute('postes_index');
        }
        $this->addFlash('success', 'Veuillez verifier votre email.');

        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('user_index');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('evenement_index');
    }

}