<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
#[\Attribute] class NoBadWords extends Constraint
{
    public $message = 'The comment should not contain offensive words.';
}