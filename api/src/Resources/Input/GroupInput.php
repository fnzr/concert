<?php

namespace App\Resources\Input;

use App\Exceptions\ValidationException;

class GroupInput
{

    public readonly string $name;
    public function __construct(array $data)
    {
        $this->name = trim($data['name'] ?? '');
        if (strlen($this->name) < 3) {
            throw new ValidationException(["name" => "must contain at least 3 characters"]);
        }
    }
}
