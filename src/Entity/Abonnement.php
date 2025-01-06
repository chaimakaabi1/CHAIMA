<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use setasign\Fpdi\Tcpdf\Fpdi as TcpdfFpdi;

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idAbonnement", type: "integer", nullable: false)]
    private ?int $idAbonnement  = null;

    #[ORM\Column(length: 255)]
    private ?string $user = null;

    #[ORM\Column(length: 255)]
    private ?string $cours = null;

    #[ORM\Column(name: "typeAbonnement", type: "string", length: 255, nullable: false)]
    private ?string $typeAbonnement = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(name: "dateDebut", type: "date", nullable: false)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(name: "dateExpiration", type: "date", nullable: false)]
    private ?\DateTimeInterface $dateExpiration = null;

    public function getidAbonnement (): ?int
    {
        return $this->idAbonnement ;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCours(): ?string
    {
        return $this->cours;
    }

    public function setCours(string $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    public function getTypeAbonnement(): ?string
    {
        return $this->typeAbonnement;
    }

    public function setTypeAbonnement(string $typeAbonnement): static
    {
        $this->typeAbonnement = $typeAbonnement;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }


    /**
     * Generate the PDF associated with the subscription.
     * @return string The generated PDF content
     */
    public function generateSubscriptionPdf(): string
    {
        $pdf = new TcpdfFpdi();

        $pdf->AddPage();
        $pdf->Rect(5, 5, $pdf->GetPageWidth() - 10, $pdf->GetPageHeight() - 10);
        $pdf->SetFillColor(200, 230, 550);

        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0, 10, 'Détails de l\'abonnement', 1, 1, 'C', 1);
        $pdf->Ln();

        $cellWidth = 32;
        $cellHeight = 10;
        $pdf->SetFont('freeserif', '', 12);


        $pdf->SetTextColor(0, 0, 0);

        $pdf->Cell($cellWidth, $cellHeight, 'Nom d\'utilisateur', 1, 0, '', 1);
        $pdf->Cell($cellWidth, $cellHeight, 'Cours', 1, 0, '', 1);
        $pdf->Cell($cellWidth, $cellHeight, 'Type d\'abonnement', 1, 0, '', 1);
        $pdf->Cell($cellWidth, $cellHeight, 'Prix', 1, 0, '', 1);
        $pdf->Cell($cellWidth, $cellHeight, 'Date de début', 1, 0, '', 1);
        $pdf->Cell($cellWidth, $cellHeight, 'Date d\'expiration', 1, 0, '', 1);
        $pdf->Ln();

        $pdf->SetFont('freeserif', 'A', 12);

        $pdf->Cell($cellWidth, $cellHeight, $this->getUser(), 1);
        $pdf->Cell($cellWidth, $cellHeight, $this->getCours(), 1);
        $pdf->Cell($cellWidth, $cellHeight, $this->getTypeAbonnement(), 1);
        $pdf->Cell($cellWidth, $cellHeight, $this->getPrice(), 1);
        $pdf->Cell($cellWidth, $cellHeight, $this->getDateDebut()->format('Y-m-d'), 1);
        $pdf->Cell($cellWidth, $cellHeight, $this->getDateExpiration()->format('Y-m-d'), 1);
        $pdf->Ln();

        $pdf->SetFont('freeserif', 'I', 10);
        $pdf->SetTextColor(0, 0, 0); // Reset font color
        $pdf->Cell(0, 120, ' Le ' . date('Y-m-d') . ' - ' . $this->getUser(), 0, 1, 'R');

        return $pdf->Output('subscription_details.pdf', 'S');
    }
}
