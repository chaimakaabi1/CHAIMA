<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class UniqueUserDetails extends Constraint
{
    public $message = 'This email, username, or phone number is already in use.';

}