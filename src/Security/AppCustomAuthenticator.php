<?php

namespace App\Security;

use App\Entity\Admin;
use App\Entity\Instructor;
use App\Entity\Student;
use App\Repository\AdminRepository;
use App\Repository\InstructorRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class AppCustomAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    private EntityManagerInterface $entityManager;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private AuthorizationCheckerInterface $authorizationChecker,
        EntityManagerInterface $entityManager // Inject EntityManagerInterface
    ) {
        $this->entityManager = $entityManager;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');

        if (empty($email) || empty($password)) {
            throw new CustomUserMessageAuthenticationException('Fields are empty.');
        }

        $adminRepository = $this->entityManager->getRepository(Admin::class);
        $studentRepository = $this->entityManager->getRepository(Student::class);
        $instructorRepository = $this->entityManager->getRepository(Instructor::class);

        $user = $adminRepository->findOneBy(['email' => $email]);
        if (!$user) {
            $user = $studentRepository->findOneBy(['email' => $email]);
            if (!$user) {
                $user = $instructorRepository->findOneBy(['email' => $email]);
            }
        }

        if (!$user) {
            throw new CustomUserMessageAuthenticationException('No account matches.');
        }

        if (!$user->getIsActive()) {
            throw new CustomUserMessageAuthenticationException('Your account is not active. Please contact the administrator.');
        }

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $roles = $token->getRoleNames();

        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->urlGenerator->generate('admin_dashboard'));
        } elseif ($this->authorizationChecker->isGranted('ROLE_STUDENT')) {
            // Replace 'student_dashboard' with the actual route for the student dashboard
            return new RedirectResponse($this->urlGenerator->generate('student_dashboard'));
        } elseif ($this->authorizationChecker->isGranted('ROLE_INSTRUCTOR')) {
            // Replace 'instructor_dashboard' with the actual route for the instructor dashboard
            return new RedirectResponse($this->urlGenerator->generate('instructor_dashboard'));
        }

        // Default redirect
        return new RedirectResponse($this->urlGenerator->generate('homepage'));
    }



    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
