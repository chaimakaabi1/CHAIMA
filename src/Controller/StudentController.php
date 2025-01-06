<?php

namespace App\Controller;


use App\Entity\Student;

use App\Form\StudentType;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/student')]
class StudentController extends AbstractController
{
    #[Route('/', name: 'app_student_index', methods: ['GET'])]
    public function index(StudentRepository $studentRepository): Response
    {
        return $this->render('student/index.html.twig.twig', [
            'students' => $studentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_student_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
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


            return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/new.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_student_show', methods: ['GET'])]
    public function show(Student $student): Response
    {
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_student_edit', methods: ['GET', 'POST'])]
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

            return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/edit.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_student_delete', methods: ['POST'])]
    public function delete(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
    }
}
