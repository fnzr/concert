<?php

namespace App\Services;

use App\Models\ArtistModel;
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

}
