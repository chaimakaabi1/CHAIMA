<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idPayment", type: "integer", nullable: false)]
    private ?int $idPayment = null;

    #[ORM\Column(name: "cardNumber", type: "string", length: 255, nullable: false)]
    private ?string $cardNumber = null;

    #[ORM\Column(name: "expirationDate", type: "date", nullable: false)]
    private ?\DateTimeInterface $expirationDate = null;

    #[ORM\Column(name: "eightCard ", type: "string", length: 255, nullable: false)]
    private ?string $eightCard = null;

    public function getidPayment(): ?int
    {
        return $this->idPayment;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(string $cardNumber): static
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(\DateTimeInterface $expirationDate): static
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getEightCard(): ?string
    {
        return $this->eightCard;
    }

    public function setEightCard(string $eightCard): static
    {
        $this->eightCard = $eightCard;

        return $this;
    }
}
