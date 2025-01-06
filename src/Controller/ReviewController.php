<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Service\BadWordFilterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/review')]
class ReviewController extends AbstractController
{
    #[Route('/', name: 'app_review_index', methods: ['GET'])]
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

    private BadWordFilterService $badWordFilterService;

    public function __construct(BadWordFilterService $badWordFilterService)
    {
        $this->badWordFilterService = $badWordFilterService;
    }


    #[Route('/new', name: 'app_review_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Filter bad words in the comment content
            $filteredComment = $this->badWordFilterService->filterBadWords($review->getCommentcontent());
            $review->setCommentcontent($filteredComment);

            $review->setCreatedAt(new \DateTime());

            $entityManager->persist($review);
            $entityManager->flush();

            return $this->redirectToRoute('app_review_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('review/new.html.twig', [
            'review' => $review,
            'form' => $form,
        ]);
    }
    #[Route('/show_reviews/{courseId}', name: 'app_show_reviews', methods: ['GET'])]

    public function showReviews(int $courseId, ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findReviewsByCourseId($courseId);

        return $this->render('review/showw.html.twig', [
            'reviews' => $reviews,
        ]);
    }

    ////indesx mais pour student
    #[Route('/showreviewstudnet/{courseId}', name: 'app_review_show_student', methods: ['GET'])]
    public function showreviewstudent(int $courseId, ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findReviewsByCourseId($courseId);

        return $this->render('review/showreviewstudent.html.twig', [
            'reviews' => $reviews,
        ]);
    }
    #[Route('/{reviewid}', name: 'app_review_show', methods: ['GET'])]
    public function show(Review $review): Response
    {
        return $this->render('review/show.html.twig', [
            'review' => $review,
        ]);
    }

    #[Route('/{reviewid}/edit', name: 'app_review_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Review $review, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_review_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('review/edit.html.twig', [
            'review' => $review,
            'form' => $form,
        ]);
    }

    #[Route('/{reviewid}', name: 'app_review_delete', methods: ['POST'])]
    public function delete(Request $request, Review $review, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$review->getReviewid(), $request->request->get('_token'))) {
            $entityManager->remove($review);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_review_index', [], Response::HTTP_SEE_OTHER);
    }










}
