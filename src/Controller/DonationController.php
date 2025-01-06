<?php

namespace App\Controller;

use App\Entity\Donation;
use App\Form\DonationType;
use App\Repository\DonationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/donation')]
class DonationController extends AbstractController
{
    #[Route('/', name: 'app_donation_index', methods: ['GET'])]
    public function index(DonationRepository $donationRepository): Response
    {
        return $this->render('donation/index.html.twig', [
            'donations' => $donationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_donation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $donation = new Donation();
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($donation);
            $entityManager->flush();



            // Rediriger vers la même page pour rafraîchir avec les champs vides
            return $this->redirectToRoute('payment');


        }

        return $this->renderForm('donation/new.html.twig', [
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_donation_show', methods: ['GET'])]
    public function show(Donation $donation): Response
    {
        return $this->render('donation/show.html.twig', [
            'donation' => $donation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_donation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Donation $donation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();



                $this->addFlash('success', 'update avec succes');

            // Rendre à nouveau la vue pour afficher le message flash

        }

        return $this->renderForm('donation/edit.html.twig', [
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_donation_delete', methods: ['POST'])]
    public function delete(Request $request, Donation $donation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$donation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($donation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route("/donation/search", name: "app_donation_search", methods: ["GET"])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les paramètres de recherche depuis la requête
        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');
        $numeroMobile = $request->query->get('numero_mobile');

        // Rechercher dans la base de données en fonction des critères
        $donation = $entityManager->createQueryBuilder()
            ->select('r')
            ->from(Donation::class, 'r')
            ->where('r.nom = :nom')
            ->andWhere('r.prenom = :prenom')
            ->andWhere('r.numeroMobile = :numeroMobile')
            ->setParameter('nom', $nom)
            ->setParameter('prenom', $prenom)
            ->setParameter('numeroMobile', $numeroMobile)
            ->getQuery()
            ->getResult();

        // Afficher la vue avec les résultats de la recherche
        return $this->render('donation/search.html.twig', [
            'donations' => $donation,
        ]);
    }

}
