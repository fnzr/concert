<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;

class ArtistModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("artist");
        self::attribute('id_artist', key: Key::PRIMARY);
        self::attribute('name');
        self::associationMany('albums', AlbumModel::class, 'id_artist');
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
