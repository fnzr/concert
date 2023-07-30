<?php

namespace App\Resources;

use App\Models\AlbumModel;
use App\Models\GroupModel;
use App\Models\UserModel;
use Orkester\Resource\BasicResource;
use Orkester\Manager;
use Orkester\Resource\ResourceInterface;

class GroupResource extends BasicResource
{

    public function __construct()
    {
        parent::__construct(GroupModel::class);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'users' => Manager::getContainer()->make(UserResource::class),
            default => null
        };
    }
}
