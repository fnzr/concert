<?php

namespace App\Exceptions;

use Orkester\Exception\GraphQLException;

class ValidationException extends \InvalidArgumentException implements GraphQLException
{

    public function __construct(protected array $errors, string $message = "Validation Error", int $code = 400)
    {
        parent::__construct($message, $code);
    }

    public function getType(): string
    {
        return "validation";
    }

    public function getDetails(): array
    {
        return $this->errors;
    }
}
