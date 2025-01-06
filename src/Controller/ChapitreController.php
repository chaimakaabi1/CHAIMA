<?php

namespace App\Controller;


use App\Entity\Course;
use App\Entity\Chapitre;
use App\Entity\Chapitrefile;
use App\Entity\Chapitrequizz;
use App\Form\ChapitreType;

use App\Controller\ChapitreToHTMLJob;
use App\Controller\ChapitreStatisticsJob;

use App\Repository\CourseRepository;
use App\Repository\ChapitreRepository;
use App\Repository\ChapitrefileRepository;
use App\Repository\ChapitrequizzRepository;

use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/chapitre')]
class ChapitreController extends AbstractController
{
    private LoggerInterface $logger;


    #[Route('/bycourse{courseId}', name: 'app_chapitre_index', methods: ['GET'])]
    public function index(int $courseId, ChapitreRepository $chapitreRepository, CourseRepository $courseRepository, EntityManagerInterface $entityManager): Response
    {
        $courses = $courseRepository->findBy(['courseId' => $courseId]);
        $chapitres = $chapitreRepository->findBy(['courseid' => $courseId]);

        if(count($courses) == 0)
        {
            return $this->redirectToRoute('app_chapitre_index', [], Response::HTTP_SEE_OTHER);
        }
        else
        {
            $chapStatsJob = new ChapitreStatisticsJob();
            $courseStatistics = $chapStatsJob->courseStatistics($courses[0], $entityManager);

            return $this->render('chapitre/index.html.twig', [
                'course' => $courses[0],
                'chapitres' => $chapitres,
                'statistics' => $courseStatistics
            ]);
        }
    }

    #[Route('/bycourse{courseId}/notifyStudents', name: 'app_course_notifyStudents', methods: ['GET'])]
    public function notifyStudents(int $courseId, EntityManagerInterface $entityManager, CourseRepository $repo, MailerInterface $mailer): Response
    {
        $course = $repo->findOneBy(['courseId' => $courseId]);
        $notifier = new ChapitreNotifier($mailer);
        $notifier->notifyStudentsAboutCourseChanged($course, $entityManager);
        return $this->redirectToRoute('app_chapitre_index', ['courseId' => $courseId], Response::HTTP_SEE_OTHER);
    }

    #[Route('/bycourse{courseId}/pdf', name: 'app_course_ch_pdf', methods: ['GET'])]
    public function downloadPDFCourse(int $courseId, EntityManagerInterface $entityManager, CourseRepository $repo, MailerInterface $mailer): Response
    {
        $course = $repo->findOneBy(['courseId' => $courseId]);
        $converter = new ChapitreToHTMLJob();
        $pdfFilePath = $converter->courseToPDF($course, $entityManager, null);

        $response = new BinaryFileResponse($pdfFilePath);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="course.pdf"');
        return $response;
    }

    #[Route('/chapitre/error')]
    public function error(): Response
    {
        return $this->render('chapitre/courseNotFound.html.twig');
    }

    #[Route('/new{courseId}', name: 'app_chapitre_new', methods: ['GET', 'POST'])]
    public function new(int $courseId, Request $request, EntityManagerInterface $entityManager): Response
    {
        $chapitre = new Chapitre();
        $chapitre->setCourseid($courseId);

        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chapitre);
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitre_index', ['courseId' => $courseId], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chapitre/new.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chapitre_show', methods: ['GET'])]
    public function show(Chapitre $chapitre): Response
    {
        return $this->render('chapitre/show.html.twig', [
            'chapitre' => $chapitre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chapitre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chapitre $chapitre, EntityManagerInterface $entityManager, 
        ChapitrefileRepository $chapitreFileRepository): Response
    {
        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitre_index', ['courseId' => $chapitre->getCourseid()], Response::HTTP_SEE_OTHER);
        }

        $chapitreFile = $chapitreFileRepository->findOneBy(['chapitreid' => $chapitre->getId()]);

        return $this->renderForm('chapitre/edit.html.twig', [
            'chapitre' => $chapitre,
            'file' => $chapitreFile,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit/complete&q={query}', name: 'app_chapitre_edit_complete', methods: ['GET'])]
    public function complete(string $query): JsonResponse
    {
        $suggestions = $this->getGoogleAutocompleteSuggestions($query); 
        return new JsonResponse($suggestions);
    }

   private function getGoogleAutocompleteSuggestions($query) {
        $apiUrl = 'https://suggestqueries.google.com/complete/search?client=firefox&q=' . urlencode($query);

        // Use file_get_contents instead of cURL
        $response = file_get_contents($apiUrl);

        if ($response === false) {
            error_log('Error reading the API response: ' . error_get_last()['message']);
            return [];
        }

        // JSON decode directly without unnecessary checks
        $jsonArray = json_decode($response, true);

        // Use the null coalescing operator to simplify assignment
        $suggestions = $jsonArray[1] ?? [];

        return $suggestions;
    }



    #[Route('/{id}', name: 'app_chapitre_delete', methods: ['POST'])]
    public function delete(Request $request, Chapitre $chapitre, 
        EntityManagerInterface $entityManager, ChapitrefileRepository $chapitreFileRepository, ChapitrequizzRepository $chapitrequizzRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->request->get('_token'))) 
        {
            $files = $chapitreFileRepository->findBy(['chapitreid' => $chapitre->getId()]);
            $quizzes = $chapitrequizzRepository->findBy(['chapitreid' => $chapitre->getId()]);

            foreach ($files as $file) { $entityManager->remove($file); }
            foreach ($quizzes as $quizz) { $entityManager->remove($quizz); }

            $entityManager->remove($chapitre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chapitre_index', ['courseId' => $chapitre->getCourseid()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/edit/upload', name: 'app_chapitre_upload', methods: ['POST', 'GET'])]
    public function upload(Request $request, Chapitre $chapitre, 
        ChapitrefileRepository $chapitreFileRepository, EntityManagerInterface $entityManager)
    {
        $chapitreFile = $chapitreFileRepository->findOneBy(['chapitreid' => $chapitre->getId()]);
        if ($request->isMethod('GET'))
        {
            return $this->render('chapitre/upload_page.html.twig', [
                'chapitre' => $chapitre
            ]);
        } 
        elseif ($request->isMethod('POST'))
        {
            $uploadedFile = $request->files->get('file');
            if ($uploadedFile)
            {
                if( is_null($chapitreFile) )
                {
                    $chapitreFile = new Chapitrefile();
                    $chapitreFile->setChapitreid($chapitre);
                }

                $chapitreFile->setName($uploadedFile->getClientOriginalName());
                //$chapitreFile->setContent(file_get_contents($uploadedFile->getPathname())); //this only for text strings
                $fileHandle = fopen($uploadedFile->getPathname(), 'rb');
                $chapitreFile->setContent(stream_get_contents($fileHandle));
                fclose($fileHandle);

                $entityManager->persist($chapitreFile);
                $entityManager->flush();

                //return new Response('File uploaded successfully!', 200);
                return $this->redirectToRoute('app_chapitre_edit', ['id' => $chapitre->getId()], Response::HTTP_SEE_OTHER);
            } 
            else
            {
                return new Response('Error uploading file', 400);
            }
        }
        return new Response('Invalid request method', 405);
    }

    #[Route('/{id}/edit/quizz', name: 'app_chapitre_edit_quizz', methods: ['GET', 'POST'])]
    public function editQuizz(Chapitre $chapitre, ChapitrequizzRepository $repo, Request $request, EntityManagerInterface $entityManager)
    {
        $quizz = $repo->findOneBy(['chapitreid' => $chapitre->getId()]);

        if(is_null($quizz))
        {
            $quizz = new Chapitrequizz();
            $quizz->setChapitreid($chapitre);
        }

        if ($request->isMethod('POST'))
        {
            $postData = json_decode($request->getContent(), true);

            // Assuming you have setters in your Quizz entity
            $quizz->setQuestions($postData['questions']);
            $quizz->setAnswers($postData['answers']);
            $quizz->setCorrectAnswers($postData['correctAnswers']);

            $entityManager->persist($quizz);
            $entityManager->flush();

            return new JsonResponse(['message' => 'Quizz updated successfully'], JsonResponse::HTTP_OK);
        }

        return $this->render('chapitre/quizzEditor.html.twig', [
            'chapitre' => $chapitre,
            'quizz' => $quizz
        ]);
    }

    #[Route('/{id}/view', name: 'app_course_viewer', methods: ['GET'])]
    public function viewCourse(Course $course, EntityManagerInterface $entityManager)
    {
        $converter = new ChapitreToHTMLJob();
        return $this->render('chapitre/viewer.html.twig', [
            'source' => $converter->courseToHTML($course, $entityManager),
        ]);
    }

}
