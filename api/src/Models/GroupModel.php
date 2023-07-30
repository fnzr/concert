<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;

class GroupModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("group");
        self::attribute('id_group', key: Key::PRIMARY);
        self::attribute('name');
        self::associationMany('users', UserModel::class, associativeTable: 'users_groups');
    }
}
