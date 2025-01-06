<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: CourseRepository::class)]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "courseId", type: "bigint", nullable: false)]
    private ?int $courseId = null;

    #[Assert\NotBlank(message: 'Title cannot be blank')]
        #[Assert\Length(max: 50, maxMessage: 'Title cannot be longer than {{ limit }} characters')]
    #[ORM\Column(name: "title", type: "string", length: 255, nullable: false)]

    private ?string $title = null;

    #[ORM\Column(length: 2500)]
    #[Assert\NotBlank(message: 'Description cannot be blank')]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Price cannot be blank')]
    #[Assert\Range(
        notInRangeMessage: 'Price must be between {{ min }} and {{ max }}',
        invalidMessage: 'Price must be a number',
        min: 0,
        max: 100
    )]
    private ?float $price = null;

    #[Assert\NotBlank(message: 'image cannot be blank')]

    #[ORM\Column(name: "image", type: "string", length: 2000, nullable: false)]
    private ?string $image = null;

    #[ORM\Column(name: "isActive", type: "boolean", nullable: false)]
    private ?bool $isActive = null;

    #[ORM\Column(name: "updatedAt", type: "date", nullable: false)]
    private ?\DateTimeInterface $updatedAt ;

    #[ORM\Column(name: "createdAt", type: "date", nullable: false)]
    private ?\DateTimeInterface $createdAt ;

    #[ORM\Column(name: "courseContent", type: "string", length: 2000, nullable: false)]
    #[Assert\NotBlank(message: 'Course content cannot be blank')]
    #[Assert\Length(max: 2000, maxMessage: 'Course content cannot be longer than {{ limit }} characters')]
    private ?string $courseContent ;

    #[ORM\Column(name: "instructorId", type: "bigint", nullable: false)]
    private ?int $instructorId ;


    #[ORM\Column(name: "instructorName", type: "string", length: 100, nullable: false)]
    #[Assert\NotBlank(message: 'Instructor name cannot be blank')]
    #[Assert\Length(max: 100, maxMessage: 'Instructor name cannot be longer than {{ limit }} characters')]
    private ?string $instructorName ;

    public function getcourseId(): ?int
    {
        return $this->courseId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCourseContent(): ?string
    {
        return $this->courseContent;
    }

    public function setCourseContent(string $courseContent): static
    {
        $this->courseContent = $courseContent;

        return $this;
    }

    public function getInstructorId(): ?int
    {
        return $this->instructorId;
    }

    public function setInstructorId(int $instructorId): static
    {
        $this->instructorId = $instructorId;

        return $this;
    }

    public function getInstructorName(): ?string
    {
        return $this->instructorName;
    }

    public function setInstructorName(string $instructorName): static
    {
        $this->instructorName = $instructorName;

        return $this;
    }


    public function __toString()
    {
        return $this->title;
    }

}
