<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;

class UsersGroupsModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("users_groups");
        self::associationMany('users', UserModel::class, 'id_user:id');
        self::associationMany('groups', GroupModel::class, 'id_group:id');
    }
}
