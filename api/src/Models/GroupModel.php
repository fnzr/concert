<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Map\ClassMap;

class GroupModel extends \Orkester\Persistence\Model
{
    public static function map(ClassMap $classMap)
    {
        $classMap
            ->table("group")
            ->attribute('id_group', key: Key::PRIMARY)
            ->attribute('name')
            ->associationMany('users', UserModel::class, associativeTable: 'users_groups');
    }
}
