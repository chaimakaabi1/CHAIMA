<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Twilio\Rest\Client;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;



#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);

    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Reclamation added successfully!');

            // Rediriger vers la même page pour rafraîchir avec les champs vides
            return $this->redirectToRoute('app_reclamation_new');
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'update avec succes');
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route("/reclamation/search", name: "app_reclamation_search", methods: ["GET"])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les paramètres de recherche depuis la requête
        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');
        $numeroMobile = $request->query->get('numero_mobile');

        // Rechercher dans la base de données en fonction des critères
        $reclamations = $entityManager->createQueryBuilder()
            ->select('r')
            ->from(Reclamation::class, 'r')
            ->where('r.nom = :nom')
            ->andWhere('r.prenom = :prenom')
            ->andWhere('r.numeroMobile = :numeroMobile')
            ->setParameter('nom', $nom)
            ->setParameter('prenom', $prenom)
            ->setParameter('numeroMobile', $numeroMobile)
            ->getQuery()
            ->getResult();

        // Afficher la vue avec les résultats de la recherche
        return $this->render('reclamation/search.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }


    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/{id}/send_email', name: 'send_email', methods: ['POST'])]
    public function sendEmail(Reclamation $reclamation): Response
    {
        $destinataireEmail = $reclamation->getEmail();
        $contenuReclamation = "Votre réponse à la réclamation ID: {$reclamation->getId()} ";

        $email = (new Email())
            ->from('medstudio29') // Remplacez par votre adresse e-mail
            ->to('$destinataireEmail')
            ->subject('Réponse à votre réclamation')
            ->html('Bonjour ' . $contenuReclamation);

        $this->mailer->send($email);

        $this->addFlash('success', 'E-mail de réponse envoyé avec succès !');

        return $this->redirectToRoute('admin_dashboard_reclamation');
    }


    #[Route('/{id}/mark_as_processed', name: 'mark_as_processed', methods: ['POST'])]
    public function markAsProcessed(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $accountSid = $_ENV['TWILIO_ACCOUNT_SID'];
        $authToken = $_ENV['TWILIO_AUTH_TOKEN'];
        $twilioPhoneNumber = $_ENV['TWILIO_PHONE_NUMBER'];
        // Vérifiez si le bouton a été soumis dans le formulaire
        if ($this->isCsrfTokenValid('mark_status', $request->request->get('_token'))) {
            // Changez le statut de la réclamation à "Traitée"
            $reclamation->setStatus("Traitée");
            $entityManager->flush(); // Sauvegardez les modifications dans la base de données
            $twilio = new Client($accountSid, $authToken);

            $message = $twilio->messages->create(
                $reclamation->getNumeroMobile(), // Le numéro de téléphone du destinataire
                [
                    'from' => '+15086194484', // Le numéro Twilio expéditeur
                    'body' => 'Votre réclamation a été traitée avec succès.' // Le contenu du SMS
                ]
            );
            $this->addFlash('success', 'Réclamation marquée comme traitée avec succès !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        // Redirigez vers la page de détails de la réclamation ou une autre page appropriée
        return $this->redirectToRoute('app_reclamation_index', ['id' => $reclamation->getId()]);
    }



}