<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChapitrefileRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chapitrefile
 *
 */
#[ORM\Entity(repositoryClass: ChapitrefileRepository::class)]
#[ORM\Table(name: 'chapitrefile')]
#[ORM\Index(name: 'chapitreId', columns: ['chapitreId'])]
class Chapitrefile
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
    #[ORM\Column(name: 'content', type: 'blob', length: 0, nullable: true, options: ['default' => 'NULL'])]
    private $content = 'NULL';

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

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): static
    {
        $this->content = $content;

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
