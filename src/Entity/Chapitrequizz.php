<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChapitrequizzRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chapitrequizz
 *
 */
#[ORM\Entity(repositoryClass: ChapitrequizzRepository::class)]
#[ORM\Table(name: 'chapitrequizz')]
#[ORM\Index(name: 'chapitreId', columns: ['chapitreId'])]
class Chapitrequizz
{
    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string|null
     *
     */
    #[ORM\Column(name: 'name', type: 'string', length: 255, nullable: true, options: ['default' => 'NULL'])]
    #[Assert\NotBlank(message:"Name is required")]
    private $name = 'NULL';

    /**
     * @var string|null
     *
     */
    #[ORM\Column(name: 'questions', type: 'text', length: 65535, nullable: true, options: ['default' => 'NULL'])]
    private $questions = 'NULL';

    /**
     * @var string|null
     *
     */
    #[ORM\Column(name: 'answers', type: 'text', length: 65535, nullable: true, options: ['default' => 'NULL'])]
    private $answers = 'NULL';

    /**
     * @var string|null
     *
     */
    #[ORM\Column(name: 'correctAnswers', type: 'string', length: 255, nullable: true, options: ['default' => 'NULL'])]
    private $correctanswers = 'NULL';

    /**
     * @var \Chapitre
     *
     */
    #[ORM\ManyToOne(targetEntity: 'Chapitre')]
    #[ORM\JoinColumn(name: 'chapitreId', referencedColumnName: 'id')]
    private $chapitreid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getQuestions(): ?string
    {
        return $this->questions;
    }

    public function setQuestions(?string $questions): static
    {
        $this->questions = $questions;

        return $this;
    }

    public function getAnswers(): ?string
    {
        return $this->answers;
    }

    public function setAnswers(?string $answers): static
    {
        $this->answers = $answers;

        return $this;
    }

    public function getCorrectanswers(): ?string
    {
        return $this->correctanswers;
    }

    public function setCorrectanswers(?string $correctanswers): static
    {
        $this->correctanswers = $correctanswers;

        return $this;
    }

    public function getChapitreid(): ?Chapitre
    {
        return $this->chapitreid;
    }

    public function setChapitreid(?Chapitre $chapitreid): static
    {
        $this->chapitreid = $chapitreid;

        return $this;
    }


}
