<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChapitreRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chapitre
 *
 */
#[ORM\Entity(repositoryClass: ChapitreRepository::class)]
#[ORM\Table(name: 'chapitre')]
class Chapitre
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
    #[Assert\Regex(pattern:"/^[a-zA-Z0-9\s]+$/", message:"Only alphanumeric characters and spaces are allowed.")]
    private $name = 'NULL';

    /**
     * @var string|null
     *
     */
    #[ORM\Column(name: 'description', type: 'text', length: 65535, nullable: true, options: ['default' => 'NULL'])]
    #[Assert\Length(max:500, maxMessage:"Description cannot be longer than {{ limit }} characters.")]
    #[Assert\NotBlank(message:"Description should not be empty.")]
    private $description = 'NULL';

    /**
     * @var \DateTime|null
     *
     */
    #[ORM\Column(name: 'creationDate', type: 'date', nullable: true)]
    //#[Assert\Callback(callback:"validateCreationDate")]
    private $creationdate;

    /**
     * @var int|null
     *
     */
    #[ORM\Column(name: 'type', type: 'integer', nullable: true, options: ['default' => 'NULL'])]
    private $type = NULL;

    /**
     * @var int|null
     *
     */
    #[ORM\Column(name: 'courseId', type: 'integer', nullable: true, options: ['default' => 'NULL'])]
    private $courseid = NULL;


    /*public function validateCreationDate(ExecutionContextInterface $context)
    {
        // Check if creationDate is more than 10 years ago
        $tenYearsAgo = new \DateTime('-10 years');

        if ($this->creationDate !== null && $this->creationDate < $tenYearsAgo) {
            $context->buildViolation('Creation date cannot be more than 10 years ago.')
                ->atPath('creationDate')
                ->addViolation();
        }
    }*/


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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreationdate(): ?\DateTimeInterface
    {
        if ($this->creationdate == 'NULL') {
            $this->creationdate = new \DateTime();
        }

        if (is_string($this->creationdate)) {
            // Assuming $this->creationdate is stored in Y-m-d H:i:s format
            $this->creationdate = new \DateTime($this->creationdate);
        }
        return $this->creationdate;
    }

    public function setCreationdate(?\DateTimeInterface $creationdate): static
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getCourseid(): ?int
    {
        return $this->courseid;
    }

    public function setCourseid(?int $courseid): static
    {
        $this->courseid = $courseid;

        return $this;
    }


}
