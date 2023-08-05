<?php

namespace App\Services\Input;

use App\Exceptions\ValidationException;

class EvenNumberInput
{

    public function __construct(public readonly int $value)
    {
        if ($value % 2 == 1) {
            throw new ValidationException(
                [ 'input' => $value ],
                'Please provide an even number',
            );
        }
    }
}
