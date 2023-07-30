<?php

namespace App\Resources;

use App\Models\AlbumModel;
use Orkester\Resource\BasicResource;
use Orkester\Manager;
use Orkester\Resource\ResourceInterface;

class AlbumResource extends BasicResource
{

    public function __construct()
    {
        parent::__construct(AlbumModel::class);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'artist' => Manager::getContainer()->make(ArtistResource::class),
            'recordings' => Manager::getContainer()->make(RecordingResource::class),
            default => null
        };
    }
}
