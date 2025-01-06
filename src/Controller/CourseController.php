<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\CourseType;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;
use Endroid\QrCode\QrCode;

#[Route('/course')]
class CourseController extends AbstractController
{
    #[Route('/', name: 'app_course_index', methods: ['GET'])]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('course/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }


    #[Route('/catalogue', name: 'app_course_indexcatalogue', methods: ['GET'])]
    public function catalogue(CourseRepository $courseRepository, Request $request): Response
    {
        $searchInput = $request->query->get('searchInput');
        $query = $courseRepository->searchQuery($searchInput);

        // Create the Symfony Paginator
        $paginator = new Paginator($query, $fetchJoinCollection = true);

        // Paginate the results
        $currentPage = $request->query->getInt('page', 1);
        $perPage = 10; // Define the number of items per page
        $totalResults = count($paginator);
        $totalPages = ceil($totalResults / $perPage);

        $paginator->getQuery()
            ->setFirstResult(($currentPage - 1) * $perPage)
            ->setMaxResults($perPage);

        // Fetch the average rating for each course
        $averageRatings = [];
        foreach ($paginator as $course) {
            $averageRating = $courseRepository->calculateAverageRatingForCourse($course->getCourseId());
            $averageRatings[$course->getCourseId()] = $averageRating;
        }

        return $this->render('course/cataloguecourse.html.twig', [

            'courses' => $paginator,
            'averageRatings' => $averageRatings,
            'totalResults' => $totalResults,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
            'perPage' => $perPage,
            'searchInput' => $searchInput, // Pass searchInput to the template
        ]);
    }

    #[Route('/new', name: 'app_course_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $course = new Course();
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form['image']->getData();
            $fileName = uniqid().'.'.$file->guessExtension();

            // Move the file to the directory where your images are stored
            $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );

            // Set the 'image' property with the file name
            $course->setImage($fileName);

            // Set other properties and persist
            $course->setCreatedAt(new \DateTime());
            $course->setUpdatedAt(new \DateTime());

            $entityManager->persist($course);
            $entityManager->flush();

            // Send a message using Twilio
            $this->sendTwilioMessage($course);

            $this->addFlash('success', 'Course created successfully!');

            return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('course/new.html.twig', [
            'course' => $course,
            'form' => $form,
        ]);
    }

    /**
     * @throws ConfigurationException
     * @throws TwilioException
     */
    private function sendTwilioMessage(Course $course): void
    {
        $twilioAccountSid = $this->getParameter('twilio_account_sid');
        $twilioAuthToken = $this->getParameter('twilio_auth_token');
        $twilioPhoneNumber = $this->getParameter('twilio_phone_number');

        $twilioClient = new Client($twilioAccountSid, $twilioAuthToken);

        // Replace 'to' with the recipient phone number
        // Replace 'from' with your Twilio phone number
        $twilioClient->messages->create(
            '+21623671593', // Replace with the recipient's phone number
            [
                'from' => $twilioPhoneNumber,
                'body' => 'A new course has been created: ' . $course->getTitle(),
            ]
        );
    }
/////////////////////////////
    #[Route('/courses/search', name: 'app_course_search', methods: ['GET'])]
    public function searchCourses(Request $request, CourseRepository $courseRepository): Response
    {
        $searchTerm = $request->query->get('searchInput');

        if ($searchTerm) {
            $courses = $courseRepository->searchByName($searchTerm);
        } else {
            // If no search term is provided, show all courses
            $courses = $courseRepository->findAll();
        }

        return $this->render('course/index.html.twig', [
            'courses' => $courses,
        ]);
    }
    ////////////
    #[Route('/{courseId}', name: 'app_course_show', methods: ['GET'])]
    public function show(Course $course): Response
    {
        return $this->render('course/show.html.twig', [
            'course' => $course,
        ]);
    }
////////////
    #[Route('/{courseId}/edit', name: 'app_course_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Course $course, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload (similar to the new action)
            $file = $form['image']->getData();

            // Check if a new file was uploaded
            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                // Move the file to the directory where your images are stored
                $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );
                // Set the 'image' property with the file name
                $course->setImage($fileName);
            }
            // Set other properties and flush
            $course->setUpdatedAt(new \DateTime());
            $entityManager->flush();
            return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('course/edit.html.twig', [
            'course' => $course,
            'form' => $form,
        ]);
    }

    #[Route('/{courseId}', name: 'app_course_delete', methods: ['POST'])]
    public function delete(Request $request, Course $course, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$course->getCourseId(), $request->request->get('_token'))) {
            $entityManager->remove($course);
            $entityManager->flush();

        }

        return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);
    }
    //hedhi delete lel prof
    #[Route('/{courseId}', name: 'app_course_deleteprof', methods: ['POST'])]
    public function deletelelprof(Request $request, Course $course, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$course->getCourseId(), $request->request->get('_token'))) {
            $entityManager->remove($course);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_course_index', [], Response::HTTP_SEE_OTHER);

    }


    //////////////////

    /**
     * @throws NonUniqueResultException
     * @throws NoResultException
     */

    #[Route('/random_card', name: 'app_random_card', methods: ['GET'])]
    public function randomCard(CourseRepository $courseRepository): Response
    {
        // Get a random course from the database
        $randomCourse = $courseRepository->findRandomCourse();

        // Simulate generating a fake coupon for the random course
        $fakeCoupon = $this->generateFakeCoupon();

        return $this->render('course/random_card.html.twig', [
            'course' => $randomCourse,
            'fakeCoupon' => $fakeCoupon,
        ]);
    }


    private function generateFakeCoupon(): array
    {
        // Generate a fake coupon for demonstration
        return [
            'code' => 'FAKECODE' . rand(1, 100),
            'discount' => rand(10, 50), // Simulate a discount percentage
            // Add other coupon properties as needed
        ];
    }

    #[Route('/course/pdf/{id}', name: 'app_course_pdf')]
    public function generatePdf(Course $course): Response
    {
        // Fetch course details and pass them to the PDF template
        $html = $this->renderView('course/pdf_template.html.twig', [
            'course' => $course,
        ]);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);


        $dompdf = new Dompdf($pdfOptions);
        $dompdf->loadHtml($html);

        // Set paper size (A4)
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Stream the generated PDF back to the user
        $output = $dompdf->output();

        $response = new Response($output);
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }





}
