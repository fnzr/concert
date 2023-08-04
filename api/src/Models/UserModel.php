<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Map\ClassMap;

class UserModel extends \Orkester\Persistence\Model
{
    public static function map(ClassMap $classMap)
    {
        $classMap
            ->table("user")
            ->attribute('id_user', key: Key::PRIMARY)
            ->attribute('login')
            ->associationMany('groups', GroupModel::class, associativeTable: 'users_groups');
    }
}
