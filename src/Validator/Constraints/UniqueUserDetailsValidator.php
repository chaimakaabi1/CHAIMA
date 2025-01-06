<?php

namespace App\Validator\Constraints;



use App\Entity\Admin;
use App\Entity\Instructor;
use App\Entity\Student;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueUserDetailsValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(ManagerRegistry $manager)
    {
        $this->entityManager = $manager->getManager();
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$value) {
            return;
        }

        // Check if the email, username, or phone number exists in any of the three tables
        $repositoryAdmin = $this->entityManager->getRepository(Admin::class);
        $repositoryInstructor = $this->entityManager->getRepository(Instructor::class);
        $repositoryStudent = $this->entityManager->getRepository(Student::class);

        $admin = $repositoryAdmin->findOneBy(['email' => $value]);
        $instructor = $repositoryInstructor->findOneBy(['email' => $value]);
        $student = $repositoryStudent->findOneBy(['email' => $value]);

        if ($admin || $instructor || $student) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
            return;
        }

        $admin = $repositoryAdmin->findOneBy(['username' => $value]);
        $instructor = $repositoryInstructor->findOneBy(['username' => $value]);
        $student = $repositoryStudent->findOneBy(['username' => $value]);

        if ($admin || $instructor || $student) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
            return;
        }

        $admin = $repositoryAdmin->findOneBy(['phoneNumber' => $value]);
        $instructor = $repositoryInstructor->findOneBy(['phoneNumber' => $value]);
        $student = $repositoryStudent->findOneBy(['phoneNumber' => $value]);

        if ($admin || $instructor || $student) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

}