<?php

namespace App\Controller;

use App\Entity\Instructor;
use App\Entity\Student;
use App\Form\InstructorType;
use App\Form\StudentType;
use App\Service\TwilioService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/student/dashboard')]
class StudentDashboardController extends AbstractController
{
    #[Route('/home', name: 'student_dashboard')]
    public function index(): Response
    {
        return $this->render('student_dashboard/index.html.twig', [
            'controller_name' => 'StudentDashboardController',
        ]);
    }

    #[Route('/profile', name: 'student_dashboard_profile')]
    public function viewProfile(): Response
    {
        $student = $this->getUser();

        if (!$student || !$student instanceof Student) {
            return $this->redirectToRoute('app_login'); // Redirect to login page
        }

        return $this->render('student/profile.html.twig', [
            'student' => $student,
        ]);
    }

    #[Route('/student/{id}/send-verification-code', name: 'student_dashboard_send_verification_code', methods: ['POST'])]
    public function sendVerificationCode(ManagerRegistry $registry ,Request $request, Student $student, TwilioService $twilioService): Response
    {
        $verificationCode = $this->generateVerificationCode();

        $twilioService->sendVerificationCode("+216".$student->getPhoneNumber(),$verificationCode);

        $student->setVerificationCode($verificationCode);
        $entityManager= $registry->getManager();
        $entityManager->persist($student);
        $entityManager->flush();

        // Redirect to the page for entering the verification code
        return $this->redirectToRoute('student_dashboard_enter_verification_code', ['id' => $student->getId()]);
    }


    #[Route('/student/{id}/enter-verification-code', name: 'student_dashboard_enter_verification_code', methods: ['GET'])]
    public function enterVerificationCode(Student $student): Response
    {
        // Render the template for entering the verification code
        return $this->render('student/enter_verification_code.html.twig', [
            'student' => $student,
        ]);
    }

    #[Route('/student/{id}/verify-account', name: 'student_dashboard_verify_account', methods: ['POST'])]
    public function verifyAccount(Request $request, Student $student): Response
    {
        $verificationCode = $request->request->get('verification_code');
        $student = $this->getUser();
        if ($verificationCode === $student->getVerificationCode()) {
            $student->setIsVerified(true);
            // Save changes to the database
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($student);
            $entityManager->flush();

            // Redirect to the profile view or show a success message
            return $this->redirectToRoute('student_dashboard_profile', ['id' => $student->getId()]);
        } else {
            // If the code doesn't match, you might want to show an error message or redirect back to the code entry form
            return $this->redirectToRoute('student_dashboard_enter_verification_code', ['id' => $student->getId()]);
        }
    }


    #[Route('/{id}/edit', name: 'student_dashboard_edit', methods: ['GET', 'POST'])]
    public function editStudent(Request $request, Student $student, EntityManagerInterface $entityManager): Response
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

            return $this->redirectToRoute('student_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/editProfile.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    private function generateVerificationCode(): string
    {
        $randomBytes = random_bytes(4); // 4 bytes will create an 8-character hexadecimal string
        return bin2hex($randomBytes);
    }


}
