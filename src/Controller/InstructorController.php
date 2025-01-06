<?php

namespace App\Controller;


use App\Entity\Instructor;

use App\Form\InstructorType;
use App\Repository\InstructorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/instructor')]
class InstructorController extends AbstractController
{
    #[Route('/', name: 'app_instructor_index', methods: ['GET'])]
    public function index(InstructorRepository $instructorRepository): Response
    {
        return $this->render('instructor/index.html.twig.twig', [
            'instructors' => $instructorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_instructor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
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


            return $this->redirectToRoute('app_instructor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instructor/new.html.twig', [
            'instructor' => $instructor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_instructor_show', methods: ['GET'])]
    public function show(Instructor $instructor): Response
    {
        return $this->render('instructor/show.html.twig', [
            'instructor' => $instructor,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_instructor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Instructor $instructor, EntityManagerInterface $entityManager): Response
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

            return $this->redirectToRoute('app_instructor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('instructor/edit.html.twig', [
            'instructor' => $instructor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_instructor_delete', methods: ['POST'])]
    public function delete(Request $request, Instructor $instructor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$instructor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($instructor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_instructor_index', [], Response::HTTP_SEE_OTHER);
    }
}
