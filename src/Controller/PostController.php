<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\CmntRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PostController extends AbstractController
{
    #[Route('/list', name: 'list', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('back/listPost.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

    #[Route('/listFont', name: 'list_front', methods: ['GET'])]
    public function listPosts(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

 



    #[Route('/newPost', name: 'app_post_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        $currentDate = new \DateTimeImmutable();

        $post->setCreatedAt($currentDate );
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/addPost.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/getPost/{id}', name: 'postDetails', methods: ['GET'])]
    public function show(Post $post ,CmntRepository $repo ,$id): Response
    {


        $comments = $repo->findByPost($id);
        return $this->render('post/postDetails.html.twig', [
            'post' => $post,
            'comments'=>$comments
        ]);
    }

    #[Route('/editPost/{id}', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('list', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/updatePost.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/deletepost/{id}', name: 'app_post_delete', methods: ['GET','POST'])]
    public function delete(Request $request, $id ,  PostRepository $postRepository, ManagerRegistry $entityManager)
    {

        $em = $entityManager->getManager();
        $post = $postRepository->find($id);
            $em->remove($post);
            $em->flush();
        

        return $this->redirectToRoute('list');
    }
}
