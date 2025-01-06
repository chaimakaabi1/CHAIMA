<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Student;


use App\Repository\ReclamationRepository;
#[ORM\Table(name: 'reclamation')]
#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{

#[ORM\Id]
#[ORM\GeneratedValue(strategy: 'IDENTITY')]
#[ORM\Column(name: 'id', type: 'integer', nullable: false)]
private $id;

    #[Assert\NotBlank(message: "Le numéro de mobile ne peut pas être vide")]
    #[Assert\Length(
        min: 11,
        max: 13,
        exactMessage: "Le numéro de mobile doit contenir exactement 8 chiffres avec l'indicatif pays (+216)"
    )]
    #[Assert\Regex(
        pattern: "/^\+216[0-9]{8}$/",
        message: "Le numéro de mobile doit commencer par +216 et être suivi de 8 chiffres"
    )]
    #[ORM\Column(name: 'numero_mobile', type: 'string', length: 1110, nullable: false)]
    private $numeroMobile;

#[Assert\NotBlank(message: "La description ne peut pas être vide")]
#[ORM\Column(name: 'description', type: 'string', length: 1110, nullable: false)]
private $description;

#[Assert\NotBlank(message: "L'objet ne peut pas être vide")]
#[ORM\Column(name: 'objet', type: 'string', length: 1110, nullable: false)]
private $objet;

#[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
#[Assert\Regex(
pattern: '/^[a-zA-Z]+$/',
message: "Le nom ne peut contenir que des lettres"
)]
#[ORM\Column(name: 'nom', type: 'string', length: 100, nullable: false)]
private $nom;

#[Assert\NotBlank(message: "Le prénom ne peut pas être vide")]
#[Assert\Regex(
pattern: '/^[a-zA-Z]+$/',
message: "Le prénom ne peut contenir que des lettres"
)]
#[ORM\Column(name: 'prenom', type: 'string', length: 1000, nullable: false)]
private $prenom;

#[Assert\NotBlank(message: "L'email ne peut pas être vide")]
#[Assert\Email(message: "L'adresse email n'est pas valide")]
#[ORM\Column(name: 'email', type: 'string', length: 1000, nullable: false)]
private $email;

    #[ORM\Column(name: 'status', type: 'string', length: 255, nullable: true, options: ['default' => 'En cours de traitement'])]
    private ?string $status = "En cours de traitement";
    #[ORM\ManyToOne(targetEntity: Student::class)]
    #[ORM\JoinColumn(name: 'student_id', referencedColumnName: 'id')]
    private $student;
public function getId(): ?int
{
    return $this->id;
}

public function getNumeroMobile(): ?string
{
    return $this->numeroMobile;
}

public function setNumeroMobile(string $numeroMobile): static
{
    $this->numeroMobile = $numeroMobile;

    return $this;
}

public function getDescription(): ?string
{
    return $this->description;
}

public function setDescription(string $description): static
{
    $this->description = $description;

    return $this;
}

public function getObjet(): ?string
{
    return $this->objet;
}

public function setObjet(string $objet): static
{
    $this->objet = $objet;

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

public function getStatus(): ?string
{
    return $this->status;
}

public function setStatus(string $status): static
{
    $this->status = $status;

    return $this;
}

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param mixed $student
     */
    public function setStudent($student): void
    {
        $this->student = $student;
    }

}
