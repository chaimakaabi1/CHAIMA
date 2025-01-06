<?php

namespace App\Controller;


use App\Entity\Instructor;
use App\Entity\Review;
use App\Form\InstructorType;
use App\Repository\CourseRepository;

use App\Service\TwilioService;

use App\Repository\ReviewRepository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/instructor/dashboard')]
class InstructorDashboardController extends AbstractController
{
   /* #[Route('/home', name: 'instructor_dashboard')]
    public function index(): Response
    {
        return $this->render('instructor_dashboard/index.html.twig.twig', [
            'controller_name' => 'InstructorDashboardController',
        ]);
    }*/

   #[Route('/home', name: 'instructor_dashboard', methods: ['GET'])]
    public function instructordash(CourseRepository $courseRepository): Response
    {
        return $this->render('course/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

    #[Route('/profile', name: 'instructor_dashboard_profile')]
    public function viewProfile(): Response
    {
        $instructor = $this->getUser();

        if (!$instructor || !$instructor instanceof Instructor) {
            return $this->redirectToRoute('app_login'); // Redirect to login page
        }

        return $this->render('instructor/profile.html.twig', [
            'instructor' => $instructor,
        ]);
    }

    #[Route('/instructor/{id}/send-verification-code', name: 'instructor_dashboard_send_verification_code', methods: ['POST'])]
    public function sendVerificationCode(ManagerRegistry $registry ,Request $request, Instructor $instructor, TwilioService $twilioService): Response
    {
        $verificationCode = $this->generateVerificationCode();

        $twilioService->sendVerificationCode("+216".$instructor->getPhoneNumber(),$verificationCode);

        $instructor->setVerificationCode($verificationCode);
        $entityManager= $registry->getManager();
        $entityManager->persist($instructor);
        $entityManager->flush();

        // Redirect to the page for entering the verification code
        return $this->redirectToRoute('instructor_dashboard_enter_verification_code', ['id' => $instructor->getId()]);
    }


    #[Route('/instructor/{id}/enter-verification-code', name: 'instructor_dashboard_enter_verification_code', methods: ['GET'])]
    public function enterVerificationCode(Instructor $instructor): Response
    {
        // Render the template for entering the verification code
        return $this->render('instructor/enter_verification_code.html.twig', [
            'instructor' => $instructor,
        ]);
    }

    #[Route('/instructor/{id}/verify-account', name: 'instructor_dashboard_verify_account', methods: ['POST'])]
    public function verifyAccount(Request $request, Instructor $instructor): Response
    {
        $verificationCode = $request->request->get('verification_code');
        $instructor = $this->getUser();
        if ($verificationCode === $instructor->getVerificationCode()) {
            $instructor->setIsVerified(true);
            // Save changes to the database
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($instructor);
            $entityManager->flush();

            // Redirect to the profile view or show a success message
            return $this->redirectToRoute('instructor_dashboard_profile', ['id' => $instructor->getId()]);
        } else {
            // If the code doesn't match, you might want to show an error message or redirect back to the code entry form
            return $this->redirectToRoute('instructor_dashboard_enter_verification_code', ['id' => $instructor->getId()]);
        }
    }


    #[Route('/{id}/edit', name: 'instructor_dashboard_edit', methods: ['GET', 'POST'])]
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

            return $this->redirectToRoute('instructor_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instructor/editProfile.html.twig', [
            'instructor' => $instructor,
            'form' => $form,
        ]);

    }
    #[Route('/statistique', name: 'app_review_stat', methods: ['GET'])]
    public function statistics(EntityManagerInterface $entityManager, CourseRepository $courseRepository): Response
    {
        // Query to get average rating for each course
        $avgRatingsByCourse = $entityManager->getRepository(Review::class)
            ->createQueryBuilder('r')
            ->select('r.coursetitle as courseTitle, AVG(r.rating) as averageRating')
            ->groupBy('r.coursetitle')
            ->getQuery()
            ->getResult();

        // Call the topInstructorsAction from CourseController
        $topInstructors = $courseRepository->findTopInstructorsWithMostReviews();

        // You can add more statistics calculations here

        return $this->render('Statistique/index.html.twig', [
            'avgRatingsByCourse' => $avgRatingsByCourse,
            'topInstructors' => $topInstructors,
            // Pass more calculated statistics as needed
        ]);
    }


    private function generateVerificationCode(): string
    {
        $randomBytes = random_bytes(4); // 4 bytes will create an 8-character hexadecimal string
        return bin2hex($randomBytes);
    }


    #[Route('/review', name: 'app_review_index_prof', methods: ['GET'])]
    public function index(Request $request, ReviewRepository $reviewRepository): Response
    {
        // Check if the request is an AJAX request
        if ($request->isXmlHttpRequest()) {
            $reviewerName = $request->query->get('reviewerName');


            // Perform the search based on the entered reviewer's name
            $reviews = $reviewRepository->searchByReviewerName($reviewerName);

            // Return the reviews as JSON
            return $this->json(['reviews' => $reviews]);
        }

        // For non-AJAX requests, get all reviews
        $reviews = $reviewRepository->findAll();

        // Render the template and pass the reviews variable
        return $this->render('review/index.html.twig', ['reviews' => $reviews]);
    }




















































}
