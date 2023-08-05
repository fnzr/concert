<?php

use App\Resources\AlbumResource;
use App\Resources\ArtistResource;

return [
    'resources' => [
        'artists' => ArtistResource::class,
        'albums' => AlbumResource::class,
        'recordings' => \App\Resources\RecordingResource::class,
        'users' => \App\Resources\UserResource::class,
        'groups' => \App\Resources\GroupResource::class
    ],
    'services' => [
        'query' => [
            'server_time' => [\App\Services\SampleService::class, 'serverTime'],
            'divide_by_two' => [\App\Services\SampleService::class, 'divideByTwo'],
            'format_input' => [\App\Services\SampleService::class, 'formatInput']
        ],
        'mutation' => [
            'login' => [\App\Services\SampleService::class, 'getToken']
        ]
    ],
];
