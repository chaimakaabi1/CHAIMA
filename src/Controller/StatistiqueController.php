<?php

namespace App\Controller;

use App\Entity\Review;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatistiqueController extends AbstractController
{
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

        ]);
    }
}
