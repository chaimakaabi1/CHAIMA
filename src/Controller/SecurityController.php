<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Instructor;
use App\Entity\Student;
use App\Form\ForgotPasswordFormType;
use App\Form\InstructorType;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\AdminRepository;
use App\Repository\InstructorRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private ManagerRegistry $managerRegistry;
    private UserPasswordHasherInterface $passwordEncoder;
    private TokenStorageInterface $tokenStorage; // Import the TokenStorageInterface

    public function __construct(ManagerRegistry $managerRegistry, UserPasswordHasherInterface $passwordEncoder, TokenStorageInterface $tokenStorage)
    {
        $this->managerRegistry = $managerRegistry;
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenStorage = $tokenStorage; // Assign the TokenStorageInterface
    }
    #[Route(path: '/login', name: 'app_login')]
   /* public function login(AuthenticationUtils $authenticationUtils): Response
    {
        //if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();


        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }*/
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $emptyFieldsError = null;
        $noAccountError = null;
        $inactiveError = null;

        // Check if the error is due to an inactive account or empty fields
        if ($error instanceof CustomUserMessageAuthenticationException) {
            $message = $error->getMessage();

            switch ($message) {
                case 'Fields are empty.':
                    $emptyFieldsError = $message;
                    break;
                case 'No account matches.':
                    $noAccountError = $message;
                    break;
                case 'Your account is not active. Please contact the administrator.':
                    $inactiveError = $message;
                    break;
            }
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'empty_fields_error' => $emptyFieldsError,
            'no_account_error' => $noAccountError,
            'inactive_error' => $inactiveError,
            'error' => $error, // You can still pass the general error if needed
        ]);
    }


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }





}
