<?php

namespace App\Controller;

use App\Entity\Instructor;
use App\Entity\Review;
use App\Repository\CourseRepository;
use App\Repository\ReviewRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfController extends AbstractController
{
    #[Route('/prof', name: 'app_prof')]
    public function index(CourseRepository $courseRepository,FlashyNotifier $flashy): Response
    {

        return $this->render('prof/index.html.twig', [
            'courses' => $courseRepository->findAll(),        ]);
    }

    //////prof can see reviews
    #[Route('/revieww', name: 'prof_see_reviews', methods: ['GET'])]
    public function seereviews(Request $request, ReviewRepository $reviewRepository): Response
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
        return $this->render('prof/seereviews.html.twig', ['reviews' => $reviews]);
    }
    #[Route('/profstatistique', name: 'prof_see_stat', methods: ['GET'])]
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
        $topThreeCourses = $courseRepository->findTopThreeHighestPricedCourses();

        // You can add more statistics calculations here

        return $this->render('prof/see_stat.html.twig', [
            'avgRatingsByCourse' => $avgRatingsByCourse,
            'topInstructors' => $topInstructors,
            'topThreeCourses'=>$topThreeCourses,
        ]);
    }
    #[Route('/mystudents', name: 'mystudents', methods: ['GET'])]
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

        return $this->render('prof/mystudent.html.twig', [
            'students' => $students,
        ]);
    }
    #[Route('/profile', name: 'prof_dashboard_profile')]
    public function viewProfile(): Response
    {
        $instructor = $this->getUser();

        if (!$instructor || !$instructor instanceof Instructor) {
            return $this->redirectToRoute('app_login'); // Redirect to login page
        }

        return $this->render('prof/profile.html.twig', [
            'instructor' => $instructor,
        ]);
    }
    #[Route('/progress', name: 'app_progresss')]
    public function progresss(): Response
    {


        return $this->render('prof/progress.html.twig');
    }

}
