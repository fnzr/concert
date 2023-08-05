<?php

namespace App\Services;

use App\Services\Input\EvenNumberInput;
use App\Services\Input\FormattedInput;
use Carbon\Carbon;

class SampleService
{

    public function getToken(string $user, string $password): string
    {
        return "{$user}_$password";
    }

    public function serverTime(): string
    {
        return Carbon::now()->toISOString();
    }

    public function formatInput(FormattedInput $input): array
    {
        return $input->data;
    }

    public function divideByTwo(EvenNumberInput $input): int
    {
        return $input->value / 2;
    }

}
