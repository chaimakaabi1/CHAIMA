<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use App\Repository\AdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index', methods: ['GET'])]
    public function index(AdminRepository $adminRepository): Response
    {
        return $this->render('admin/index.html.twig.twig', [
            'admins' => $adminRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
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


            return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/new.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]
    public function show(Admin $admin): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $admin,
        ]);
    }



    #[Route('/{id}/edit', name: 'app_admin_edit', methods: ['GET', 'POST'])]
   // #[ParamConverter('admin', class: 'App\Entity\Admin')]
    public function edit(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
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

            return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$admin->getId(), $request->request->get('_token'))) {
            $entityManager->remove($admin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
    }








}
