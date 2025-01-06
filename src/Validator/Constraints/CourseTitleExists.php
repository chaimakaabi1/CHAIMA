<?php

namespace App\Validator\Constraints;

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class CourseTitleExists extends Constraint
{
    public $message = 'The course title does not exist.';
}