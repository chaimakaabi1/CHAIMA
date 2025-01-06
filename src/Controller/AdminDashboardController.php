<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Donation;
use App\Entity\Instructor;
use App\Entity\Reclamation;
use App\Entity\Student;
use App\Form\AdminType;
use App\Form\InstructorType;
use App\Form\StudentType;
use App\Repository\AdminRepository;
use App\Service\TwilioService;

use App\Repository\DonationRepository;
use App\Repository\InstructorRepository;
use App\Repository\ReclamationRepository;

use App\Repository\CourseRepository;
use App\Repository\CmntRepository;
use App\Repository\PostRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

#[Route('/admin/dashboard')]
class AdminDashboardController extends AbstractController
{
    #[Route('/home', name: 'admin_dashboard')]
    public function index (): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }
    #[Route('/students', name: 'admin_dashboard_students', methods: ['GET'])]
    public function listStudents(Request $request, StudentRepository $studentRepository): Response
    {
        $searchQuery = $request->query->get('q');

        // Modify the query based on the search query
        $students = $studentRepository->createQueryBuilder('s')
            ->where('s.username LIKE :query')
            ->orWhere('s.email LIKE :query')
            ->orWhere('s.phoneNumber LIKE :query')
            ->orWhere('s.firstName LIKE :query')
            ->orWhere('s.lastName LIKE :query')
            // Add more fields as needed for the search
            ->setParameter('query', '%' . $searchQuery . '%')
            ->getQuery()
            ->getResult();

        return $this->render('student/index.html.twig', [
            'students' => $students,
        ]);
    }
    #[Route('/reclamation', name: 'admin_dashboard_reclamation', methods: ['GET'])]
    public function listreclamation(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();

        dump($reclamations); // Ajoutez ceci pour voir les données récupérées dans la console

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations, // Assurez-vous que le nom de variable est correctement orthographié dans la vue Twig
        ]);
    }
    #[Route('/donation', name: 'admin_dashboard_donation', methods: ['GET'])]
    public function listdonation(DonationRepository$donationRepository): Response
    {
        $donation = $donationRepository->findAll();

        dump($donation); // Ajoutez ceci pour voir les données récupérées dans la console

        return $this->render('donation/index.html.twig', [
            'donations' => $donation, // Assurez-vous que le nom de variable est correctement orthographié dans la vue Twig
        ]);
    }
    #[Route('/students/new', name: 'admin_dashboard_students_new', methods: ['GET', 'POST'])]
    public function newStudent(Request $request, EntityManagerInterface $entityManager): Response
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student, [
            'current_profile_picture' => $student->getProfilePicture(), // Pass the current profile picture path
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Update the profile picture path in the entity
                $student->setProfilePicture($fileName);
            }

            $entityManager->persist($student);
            $entityManager->flush();


            return $this->redirectToRoute('admin_dashboard_students', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/new.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/students/{id}', name: 'admin_dashboard_students_show', methods: ['GET'])]
    public function showStudent(Student $student): Response
    {
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }
    #[Route('/reclamation/{id}', name: 'admin_dashboard_reclamation_show', methods: ['GET'])]
    public function showReclamation(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    #[Route('/donation/{id}', name: 'admin_dashboard_donation_show', methods: ['GET'])]
    public function showdonation(Donation $donation): Response
    {
        return $this->render('donation/show.html.twig', [
            'donation' => $donation,
        ]);
    }
    #[Route('/students/{id}/edit', name: 'admin_dashboard_students_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StudentType::class, $student, [
            'current_profile_picture' => $student->getProfilePicture(), // Pass the current profile picture path
        ]);
        $pic =$student->getProfilePicture();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Remove the old profile picture file if it exists
                $oldProfilePicture = $student->getProfilePicture();
                if ($oldProfilePicture) {
                    $oldFilePath = $destinationDirectory . '/' . $oldProfilePicture;
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Update the profile picture path in the entity
                $student->setProfilePicture($fileName);
            } else {
                // If no new picture is selected, keep the existing profile picture
                $student->setProfilePicture($pic);
            }

            $entityManager->flush();

            return $this->redirectToRoute('admin_dashboard_students', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/edit.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/students/{id}', name: 'admin_dashboard_students_delete', methods: ['POST'])]
    public function deleteStudent(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_dashboard_students', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/students/{id}/toggle-active', name: 'admin_dashboard_students_toggle_active', methods: ['POST'])]
    public function toggleActive(Student $student, EntityManagerInterface $entityManager): Response
    {
        $student->setIsActive(!$student->getIsActive()); // Toggle isActive state

        $entityManager->flush();

        return $this->redirectToRoute('admin_dashboard_students', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/instructors', name: 'admin_dashboard_instructors', methods: ['GET'])]
    public function listInstructors(Request $request,InstructorRepository $instructorRepository): Response
    {
        $searchQuery = $request->query->get('q');

        // Modify the query based on the search query
        $instructors= $instructorRepository->createQueryBuilder('s')
            ->where('s.username LIKE :query')
            ->orWhere('s.email LIKE :query')
            ->orWhere('s.phoneNumber LIKE :query')
            ->orWhere('s.firstName LIKE :query')
            ->orWhere('s.lastName LIKE :query')
            // Add more fields as needed for the search
            ->setParameter('query', '%' . $searchQuery . '%')
            ->getQuery()
            ->getResult();

        return $this->render('instructor/index.html.twig', [
            'instructors' => $instructors,
        ]);
    }


    #[Route('/instructors/new', name: 'admin_dashboard_instructors_new', methods: ['GET', 'POST'])]
    public function newInstructor(Request $request, EntityManagerInterface $entityManager): Response
    {
        $instructor = new Instructor();
        $form = $this->createForm(InstructorType::class, $instructor, [
            'current_profile_picture' => $instructor->getProfilePicture(), // Pass the current profile picture path
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Update the profile picture path in the entity
                $instructor->setProfilePicture($fileName);
            }

            $entityManager->persist($instructor);
            $entityManager->flush();


            return $this->redirectToRoute('admin_dashboard_instructors', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instructor/new.html.twig', [
            'instructor' => $instructor,
            'form' => $form,
        ]);
    }

    #[Route('/instructors/{id}', name: 'admin_dashboard_instructors_show', methods: ['GET'])]
    public function showInstructor(Instructor $instructor): Response
    {
        return $this->render('instructor/show.html.twig', [
            'instructor' => $instructor,
        ]);
    }

    #[Route('/instructors/{id}/edit', name: 'admin_dashboard_instructors_edit', methods: ['GET', 'POST'])]
    public function editInstructor(Request $request, Instructor $instructor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InstructorType::class, $instructor, [
            'current_profile_picture' => $instructor->getProfilePicture(), // Pass the current profile picture path
        ]);
        $pic =$instructor->getProfilePicture();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Remove the old profile picture file if it exists
                $oldProfilePicture = $instructor->getProfilePicture();
                if ($oldProfilePicture) {
                    $oldFilePath = $destinationDirectory . '/' . $oldProfilePicture;
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Update the profile picture path in the entity
                $instructor->setProfilePicture($fileName);
            } else {
                // If no new picture is selected, keep the existing profile picture
                $instructor->setProfilePicture($pic);
            }

            $entityManager->flush();

            return $this->redirectToRoute('admin_dashboard_instructors', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instructor/edit.html.twig', [
            'instructor' => $instructor,
            'form' => $form,
        ]);
    }

    #[Route('/instructors/{id}', name: 'admin_dashboard_instructors_delete', methods: ['POST'])]
    public function deleteInstructor(Request $request, Instructor $instructor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$instructor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($instructor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_dashboard_instructors', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/instructors/{id}/toggle-active', name: 'admin_dashboard_instructors_toggle_active', methods: ['POST'])]
    public function toggleActiveInstructor(Instructor $instructor, EntityManagerInterface $entityManager): Response
    {
        $instructor->setIsActive(!$instructor->getIsActive()); // Toggle isActive state

        $entityManager->flush();

        return $this->redirectToRoute('admin_dashboard_instructors', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admins', name: 'admin_dashboard_admins', methods: ['GET'])]
    public function listAdmins(Request $request ,AdminRepository $adminRepository): Response
    {
        $searchQuery = $request->query->get('q');

        // Modify the query based on the search query
        $admins= $adminRepository->createQueryBuilder('s')
            ->where('s.username LIKE :query')
            ->orWhere('s.email LIKE :query')
            ->orWhere('s.phoneNumber LIKE :query')
            ->orWhere('s.firstName LIKE :query')
            ->orWhere('s.lastName LIKE :query')
            // Add more fields as needed for the search
            ->setParameter('query', '%' . $searchQuery . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/index.html.twig', [
            'admins' => $admins,
        ]);
    }

    #[Route('/admins/new', name: 'admin_dashboard_admins_new', methods: ['GET', 'POST'])]
    public function newAdmin(Request $request, EntityManagerInterface $entityManager): Response
    {
        $admin = new Admin();
        $form = $this->createForm(AdminType::class, $admin, [
            'current_profile_picture' => $admin->getProfilePicture(), // Pass the current profile picture path
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Update the profile picture path in the entity
                $admin->setProfilePicture($fileName);
            }

            $entityManager->persist($admin);
            $entityManager->flush();


            return $this->redirectToRoute('admin_dashboard_admins', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/new.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }

    #[Route('/admins/{id}', name: 'admin_dashboard_admins_show', methods: ['GET'])]
    public function showAdmin(Admin $admin): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $admin,
        ]);
    }

    #[Route('/admins/{id}/edit', name: 'admin_dashboard_admins_edit', methods: ['GET', 'POST'])]
    public function editAdmin(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminType::class, $admin, [
            'current_profile_picture' => $admin->getProfilePicture(), // Pass the current profile picture path
        ]);
        $pic =$admin->getProfilePicture();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePictureFile = $form['profilePicture']->getData();

            if ($profilePictureFile) {
                // Generate a unique file name
                $fileName = md5(uniqid()) . '.' . $profilePictureFile->guessExtension();

                // Define the destination directory
                $destinationDirectory = 'uploads';

                // Move the uploaded file to the destination directory
                $profilePictureFile->move($destinationDirectory, $fileName);

                // Remove the old profile picture file if it exists
                $oldProfilePicture = $admin->getProfilePicture();
                if ($oldProfilePicture) {
                    $oldFilePath = $destinationDirectory . '/' . $oldProfilePicture;
                    if (file_exists($oldFilePath)) {
                        unlink($oldFilePath);
                    }
                }

                // Update the profile picture path in the entity
                $admin->setProfilePicture($fileName);
            } else {
                // If no new picture is selected, keep the existing profile picture
                $admin->setProfilePicture($pic);
            }

            $entityManager->flush();

            return $this->redirectToRoute('admin_dashboard_admins', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }

    #[Route('/admins/{id}', name: 'admin_dashboard_admins_delete', methods: ['POST'])]
    public function deleteAdmin(Request $request, Admin $admin, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage): Response
    {
        $authenticatedUser = $this->getUser();

        // Check if the authenticated user is an admin
        if ($authenticatedUser instanceof Admin) {
            if ($authenticatedUser->getId() === $admin->getId()) {
                // If the admin is deleting their own account, log them out
                $entityManager->remove($admin);
                $entityManager->flush();
                $tokenStorage->setToken(null);
                $request->getSession()->invalidate();

                return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
            }

            // Admin is deleting another account
            if ($this->isCsrfTokenValid('delete' . $admin->getId(), $request->request->get('_token'))) {
                $entityManager->remove($admin);
                $entityManager->flush();

                return $this->redirectToRoute('admin_dashboard_admins', [], Response::HTTP_SEE_OTHER);
            }
        }

        // Handle the case where the user is not authorized to delete accounts
        // Redirect to an error page or display a message.
        $this->addFlash('error', 'You are not authorized to delete this account.');
        return $this->redirectToRoute('admin_dashboard_admins', [], Response::HTTP_FORBIDDEN);
    }


    #[Route('/admins/{id}/toggle-active', name: 'admin_dashboard_admins_toggle_active', methods: ['POST'])]
    public function toggleActiveAdmin(Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $admin->setIsActive(!$admin->getIsActive()); // Toggle isActive state

        $entityManager->flush();

        return $this->redirectToRoute('admin_dashboard_admins', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/profile', name: 'admin_dashboard_profile')]
    public function viewProfile(): Response
    {
        $admin = $this->getUser();

        if (!$admin || !$admin instanceof Admin) {
            // Handle the case where the user is not authenticated or not an admin
            return $this->redirectToRoute('app_login'); // Redirect to login page
        }

        return $this->render('admin/profile.html.twig', [
            'admin' => $admin,
        ]);
    }

    #[Route('/admins/{id}/send-verification-code', name: 'admin_dashboard_admins_send_verification_code', methods: ['POST'])]
    public function sendVerificationCode(ManagerRegistry $registry ,Request $request, Admin $admin, TwilioService $twilioService): Response
    {
        $verificationCode = $this->generateVerificationCode();

          $twilioService->sendVerificationCode("+216".$admin->getPhoneNumber(),$verificationCode);

        $admin->setVerificationCode($verificationCode);
        $entityManager= $registry->getManager();
        $entityManager->persist($admin);
        $entityManager->flush();

        // Redirect to the page for entering the verification code
        return $this->redirectToRoute('admin_dashboard_admins_enter_verification_code', ['id' => $admin->getId()]);
    }


    #[Route('/admins/{id}/enter-verification-code', name: 'admin_dashboard_admins_enter_verification_code', methods: ['GET'])]
    public function enterVerificationCode(Admin $admin): Response
    {
        // Render the template for entering the verification code
        return $this->render('admin/enter_verification_code.html.twig', [
            'admin' => $admin,
        ]);
    }

    #[Route('/admins/{id}/verify-account', name: 'admin_dashboard_admins_verify_account', methods: ['POST'])]
    public function verifyAccount(Request $request, Admin $admin): Response
    {
        $verificationCode = $request->request->get('verification_code');
        $admin = $this->getUser();
        if ($verificationCode === $admin->getVerificationCode()) {
            // If the code matches, update the admin entity to set isVerified to true
            $admin->setIsVerified(true);
            // Save changes to the database
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($admin);
            $entityManager->flush();

            // Redirect to the profile view or show a success message
            return $this->redirectToRoute('admin_dashboard_admins_show', ['id' => $admin->getId()]);
        } else {
            // If the code doesn't match, you might want to show an error message or redirect back to the code entry form
            return $this->redirectToRoute('admin_dashboard_admins_enter_verification_code', ['id' => $admin->getId()]);
        }
    }


    #[Route('/gerercourse', name: 'app_course_index_admin', methods: ['GET'])]
    public function indexadmin(CourseRepository $courseRepository): Response
    {
        return $this->render('course/indexadmin.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }
    #[Route('/ListComments', name: 'app_cmntt_index', methods: ['GET'])]
    public function listComments(CmntRepository $cmntRepository): Response
    {


        return $this->render('admin/listComments.html.twig', [
            'cmnts' => $cmntRepository->findAll(),
        ]);
    }

    #[Route('/listPosts', name: 'list_postss', methods: ['GET'])]
    public function listPosts(PostRepository $postRepository): Response
    {
        return $this->render('admin/listPost.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

    private function generateVerificationCode(): string
    {
        $randomBytes = random_bytes(4); // 4 bytes will create an 8-character hexadecimal string
        return bin2hex($randomBytes);
    }


    #[Route('/statistiques-reclamations', name: 'statistiques_reclamations')]
    public function countReclamations(ReclamationRepository $reclamationRepository): Response
    {
        $reclamationsByObject = $reclamationRepository->countReclamationsByObject();

        // Faites ce que vous voulez avec $reclamationsByObject, par exemple, l'afficher
        dump($reclamationsByObject);

        return $this->render('reclamation/statistiques_reclamations.html.twig', [
            'reclamationsByObject' => $reclamationsByObject,
        ]);
    }

}

