<?php

// src/Validator/Constraints/NoBadWordsValidator.php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class NoBadWordsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value === null || $value === '') {
            return;
        }

        // Define the list of prohibited words or phrases
        $badWords = ['shit', 'fuck', 'hoe'];

        // Check if the value contains any prohibited words
        foreach ($badWords as $badWord) {
            if (stripos($value, $badWord) !== false) {
                $this->context->buildViolation($constraint->message)
                    ->addViolation();
                return;
            }
        }
    }
}
