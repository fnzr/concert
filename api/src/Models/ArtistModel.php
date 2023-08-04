<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Map\ClassMap;

class ArtistModel extends \Orkester\Persistence\Model
{
    public static function map(ClassMap $classMap)
    {
        $classMap
            ->table("artist")
            ->attribute('id_artist', key: Key::PRIMARY)
            ->attribute('name')
            ->associationMany('albums', AlbumModel::class, 'id_artist');
    }

    public static function validate(array $row): array
    {
        if (empty(trim($row['name']))) {
            return ['name' => 'Name cannot be empty'];
        }
        return [];
    }

//    public static function transform(array &$row)
//    {
//        return $row;
//    }
}
