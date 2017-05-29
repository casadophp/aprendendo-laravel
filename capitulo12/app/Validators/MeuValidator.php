<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

class MeuValidator extends Validator
{

    public function validateMinhaRegraCustomizada($attribute, $value)
    {
        if ($value == 'custom') {
            return false;
        }

        return true;
    }
}
