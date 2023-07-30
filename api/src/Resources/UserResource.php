<?php

namespace App\Resources;

use App\Models\UserModel;
use Orkester\Resource\BasicResource;
use Orkester\Manager;
use Orkester\Resource\ResourceInterface;

class UserResource extends BasicResource
{

    public function __construct()
    {
        parent::__construct(UserModel::class);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'groups' => Manager::getContainer()->make(GroupResource::class),
            default => null
        };
    }

    public function mutationRevokeRights(int $id): bool
    {
        $this->replaceAssociative(
            $this->getClassMap()->getAssociationMap('groups'),
            $id,
            []
        );
        return true;
    }
}
