<?php

namespace App\Services\Input;

class FormattedInput
{
    public readonly array $data;
    public function __construct(array $data)
    {
        $this->data = [
            'text' => trim($data['text'] ?? ''),
            'count' => $data['count'] ?? 100,
            'override' => "this ignored user-provided value"
        ];
    }
}
