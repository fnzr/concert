<?php

namespace App\Resources;

use App\Models\RecordingModel;
use Orkester\Manager;
use Orkester\Persistence\Criteria\Criteria;
use Orkester\Persistence\Map\ClassMap;
use Orkester\Resource\ResourceInterface;

class RecordingResource implements ResourceInterface
{

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'album' => Manager::getContainer()->make(AlbumResource::class),
            default => null
        };
    }

    public function delete(int $id): bool
    {
        return RecordingModel::delete($id);
    }

    public function isFieldReadable(string $field): bool
    {
        return true;
    }

    public function getCriteria(): Criteria
    {
        return RecordingModel::getCriteria();
    }

    public function getClassMap(): ClassMap
    {
        return RecordingModel::getClassMap();
    }

    public function getName(): string
    {
        return 'recordings';
    }
}
