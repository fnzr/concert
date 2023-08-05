<?php

namespace App\Resources;

use App\Models\GroupModel;
use App\Resources\Input\GroupInput;
use Orkester\Persistence\Criteria\Criteria;
use Orkester\Persistence\Map\ClassMap;
use Orkester\Manager;
use Orkester\Resource\ResourceInterface;

class GroupResource implements ResourceInterface
{

    public function insert(GroupInput $input): int|string
    {
        return GroupModel::insert((array) $input);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'users' => Manager::getContainer()->make(UserResource::class),
            default => null
        };
    }

    public function isFieldReadable(string $field): bool
    {
        return true;
    }

    public function getCriteria(): Criteria
    {
        return GroupModel::getCriteria();
    }

    public function getClassMap(): ClassMap
    {
        return GroupModel::getClassMap();
    }

    public function getName(): string
    {
        return "groups";
    }
}
