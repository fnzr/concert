<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;

class UserModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("user");
        self::attribute('id_user', key: Key::PRIMARY);
        self::attribute('login');
        self::associationMany('groups', GroupModel::class, associativeTable: 'users_groups');
    }
}
