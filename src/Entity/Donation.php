<?php
namespace App\Entity;
use App\Repository\DonationRepository;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Table(name: 'donation')]
#[ORM\Entity(repositoryClass: DonationRepository::class)]
class Donation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    private $id;

    #[Assert\NotBlank(message: "Le montant ne peut pas être vide")]
    #[Assert\Type(type: 'integer', message: "Le montant doit être un nombre entier")]
    #[ORM\Column(name: 'montant', type: 'integer', nullable: false)]
    private $montant;

    #[Assert\NotBlank(message: "Le numéro de mobile ne peut pas être vide")]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        message: "Le numéro de mobile doit être composé uniquement de chiffres"
    )]
    #[ORM\Column(name: 'numero_mobile', type: 'integer', length: 1110, nullable: false)]
    private $numeroMobile;

    #[Assert\NotBlank(message: "L'adresse ne peut pas être vide")]
    #[ORM\Column(name: 'address', type: 'string', length: 1000, nullable: false)]
    private $address;

    #[Assert\NotBlank(message: "Le code postal ne peut pas être vide")]
    #[Assert\Length(
        min: 4,
        max: 4,
        exactMessage: "Le code postal doit contenir exactement 4 chiffres"
    )]
    #[Assert\Type(
        type: 'digit',
        message: "Le code postal doit être composé uniquement de chiffres"
    )]
    #[ORM\Column(name: 'code_postal', type: 'integer', nullable: false)]
    private $codePostal;

    #[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: "Le nom ne peut contenir que des lettres"
    )]
    #[ORM\Column(name: 'nom', type: 'string', length: 1000, nullable: false)]
    private $nom;

    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9]+$/',
        message: "Le prénom ne peut contenir que des lettres et des chiffres"
    )]
    #[ORM\Column(name: 'prenom', type: 'string', length: 1000, nullable: false)]
    private $prenom;

    #[Assert\NotBlank(message: "L'email ne peut pas être vide")]
    #[Assert\Email(message: "L'adresse email n'est pas valide")]
    #[ORM\Column(name: 'email', type: 'string', length: 1000, nullable: false)]
    private $email;

// Getters and setters...

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getNumeroMobile(): ?int
    {
        return $this->numeroMobile;
    }

    public function setNumeroMobile(int $numeroMobile): static
    {
        $this->numeroMobile = $numeroMobile;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}