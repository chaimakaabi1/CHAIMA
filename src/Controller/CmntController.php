<?php

namespace App\Controller;

use App\Entity\Cmnt;
use App\Form\CmntType;
use App\Form\EditCmntType;
use App\Repository\CmntRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cmnt')]
class CmntController extends AbstractController
{
    #[Route('/', name: 'app_cmnt_index', methods: ['GET'])]
    public function index(CmntRepository $cmntRepository): Response
    {

        
        return $this->render('cmnt/index.html.twig.twig', [
            'cmnts' => $cmntRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_cmnt_new', methods: ['GET', 'POST'])]
    public function new(Request $request,$id, PostRepository $postRepo , EntityManagerInterface $entityManager): Response
    {
        $cmnt = new Cmnt();
        $form = $this->createForm(CmntType::class, $cmnt);
        $form->handleRequest($request);

        $post=$postRepo->find($id);
         
        $currentDate = new \DateTimeImmutable();

        $cmnt->setCreatedAt($currentDate );
        $cmnt->setPost($post);
        if ($form->isSubmitted() && $form->isValid()) {

            $post=$postRepo->find($id);
            $entityManager->persist($cmnt);
            $entityManager->flush();

            return $this->redirectToRoute('postDetails', ['id'=>$cmnt->getPost()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post/addComment.html.twig', [
            'cmnt' => $cmnt,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cmnt_show', methods: ['GET'])]
    public function show(Cmnt $cmnt): Response
    {
        return $this->render('cmnt/show.html.twig', [
            'cmnt' => $cmnt,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_cmnt_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cmnt $cmnt, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EditCmntType::class, $cmnt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('postDetails',['id'=>$cmnt->getPost()->getId()]);
        }

        return $this->renderForm('post/edit.html.twig', [
            'cmnt' => $cmnt,
            'form' => $form,
        ]);
    }



    
    #[Route('/deletcmnt/{id}', name: 'app_cmnt_delete', methods: ['GET','POST'])]
    public function deleteCmnt(Request $request, $id ,  CmntRepository $cmntRepo, ManagerRegistry $entityManager)
    {

        $em = $entityManager->getManager();
        $cmnt = $cmntRepo->find($id);
            $em->remove($cmnt);
            $em->flush();
        

        return $this->redirectToRoute('postDetails',['id'=>$cmnt->getPost()->getId()]);
    }
}
