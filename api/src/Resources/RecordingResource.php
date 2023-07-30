<?php

namespace App\Resources;

use App\Models\RecordingModel;
use Orkester\Manager;
use Orkester\Resource\BasicResource;
use Orkester\Resource\ResourceInterface;

class RecordingResource extends BasicResource
{

    public function __construct()
    {
        parent::__construct(RecordingModel::class);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'album' => Manager::getContainer()->make(AlbumResource::class),
            default => null
        };
    }
}
