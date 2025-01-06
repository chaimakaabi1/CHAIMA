<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ReviewRepository::class)]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "reviewId", type: "bigint", nullable: false)]
    private ?int $reviewid = null;



    #[Assert\NotBlank(message: 'The course title should not be blank.')]
    //#[CustomAssert\CourseTitleExists]
    #[ORM\Column(name: "coursetitle", type: "string", length: 255, nullable: false)]
    private string $coursetitle;

    #[Assert\NotBlank(message: 'The reviewer name should not be blank.')]
    #[ORM\Column(name: "reviewerName", type: "string", length: 100, nullable: false)]
    private string $reviewername;

    #[Assert\Range(min: 0, max: 5)]
    #[ORM\Column(name: "rating", type: "integer", nullable: false)]
    private int $rating;
    #[Assert\Length(max: 200)]
    #[Assert\NotBlank(message: 'The comment title should not be blank.')]
    #[ORM\Column(name: "commentTitle", type: "string", length: 200, nullable: false)]
    private string $commenttitle;

    #[CustomAssert\NoBadWords]
    #[Assert\Length(max: 250)]
    #[Assert\NotBlank(message: 'The comment content should not be blank.')]
    #[ORM\Column(name: "commentContent", type: "string", length: 250, nullable: false)]
    private string $commentcontent;

    //#[Assert\NotBlank(message: 'The creation date should not be blank.')]
    #[ORM\Column(name: "createdAt", type: "date", nullable: false)]
    private \DateTime $createdat;

    #[ORM\ManyToOne(targetEntity: Course::class)]
    #[ORM\JoinColumn(name: "courseId", referencedColumnName: "courseId")]
    private ?Course $courseid = null;

    /**
     * @return string
     */
    public function getCoursetitle(): string
    {
        return $this->coursetitle;
    }

    public function getreviewid(): ?int
    {
        return $this->reviewid;
    }
    /**
     * @param string $coursetitle
     */
    public function setCoursetitle(string $coursetitle): void
    {
        $this->coursetitle = $coursetitle;
    }

    /**
     * @return string
     */
    public function getReviewername(): string
    {
        return $this->reviewername;
    }

    /**
     * @param string $reviewername
     */
    public function setReviewername(string $reviewername): void
    {
        $this->reviewername = $reviewername;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getCommenttitle(): string
    {
        return $this->commenttitle;
    }

    /**
     * @param string $commenttitle
     */
    public function setCommenttitle(string $commenttitle): void
    {
        $this->commenttitle = $commenttitle;
    }

    /**
     * @return string
     */
    public function getCommentcontent(): string
    {
        return $this->commentcontent;
    }

    /**
     * @param string $commentcontent
     */
    public function setCommentcontent(string $commentcontent): void
    {
        $this->commentcontent = $commentcontent;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedat(): \DateTime
    {
        return $this->createdat;
    }

    /**
     * @param \DateTime $createdat
     */
    public function setCreatedat(\DateTime $createdat): void
    {
        $this->createdat = $createdat;
    }


    /**
     * @return Course|null
     */
    public function getCourseid(): ?Course
    {
        return $this->courseid;
    }

    /**
     * @param Course|null $courseid
     */
    public function setCourseid(?Course $courseid): void
    {
        $this->courseid = $courseid;
    }














}
