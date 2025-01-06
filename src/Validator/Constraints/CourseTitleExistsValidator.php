<?php

namespace App\Validator\Constraints;

namespace App\Validator\Constraints;

use App\Entity\Course;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class CourseTitleExistsValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {
        // Implement your custom validation logic here
        // Check if the course title exists in your database

        // Replace this with your actual logic to check if the course title exists
        $courseTitleExists = $this->entityManager->getRepository(Course::class)
            ->findOneBy(['title' => $value]);

        if (!$courseTitleExists) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}