<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cours = $request->query->get('cours');
        $dateDebut = $request->query->get('dateDebut');

        // Vérifier si les deux champs sont remplis
        if (empty($cours) & empty($dateDebut)) {

            $abonnements = $entityManager
                ->getRepository(Abonnement::class)
                ->findAll();
        } else {
            $qb = $entityManager->createQueryBuilder();
            $qb->select('a')
                ->from(Abonnement::class, 'a');
            $qb = $entityManager->createQueryBuilder();
            $qb->select('a')
                ->from(Abonnement::class, 'a')
                ->andWhere('a.cours = :cours')
                ->andWhere('a.dateDebut = :dateDebut')
                ->setParameters([
                    'cours' => $cours,
                    'dateDebut' => new \DateTime($dateDebut),
                ]);

            $abonnements = $qb->getQuery()->getResult();
        }
        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnements,
        ]);

    }




    #[Route('/new', name: 'app_abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle form submission logic (you might want to persist the entity, etc.)
            $entityManager->persist($abonnement);
            $entityManager->flush();

            //return $this->redirectToRoute('app_payment_new');
        }

        return $this->renderForm('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }

    #[Route('/{idAbonnement}', name: 'app_abonnement_show', methods: ['GET'])]
    public function show(Abonnement $abonnement): Response
    {

        $pdfContent = $abonnement->generateSubscriptionPdf();


        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');

        // Vous pouvez également définir d'autres en-têtes de réponse si nécessaire

        // Retourner la réponse PDF
        return $response;
    }


    #[Route('/{idAbonnement}/edit', name: 'app_abonnement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        dump($abonnement->getIdAbonnement()); // Check the value

        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form,
        ]);
    }


    #[Route('/{idAbonnement}', name: 'app_abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $abonnement->getIdAbonnement(), $request->request->get('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/abonnement/{id}/generate-pdf", name="generate_abonnement_pdf")
     */
    public function generateAbonnementPDF(Abonnement $abonnement): Response
    {
        $pdfContent = $abonnement->generateSubscriptionPdf();

        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }
}
