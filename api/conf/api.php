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
        ],
        'mutation' => [
            'login' => [\App\Services\SampleService::class, 'getToken']
        ]
    ],
];
