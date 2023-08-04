<?php

namespace App\Models;

use Carbon\Carbon;
use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Enum\Type;
use Orkester\Persistence\Map\ClassMap;

class AlbumModel extends \Orkester\Persistence\Model
{
    public static function map(ClassMap $classMap)
    {
        $classMap
            ->table("album")
            ->attribute('id_album', key: Key::PRIMARY)
            ->attribute('name')
            ->attribute('release_date', type: Type::INTEGER)
            ->attribute('id_artist', key: Key::FOREIGN, nullable: false)
            ->associationOne('artist', ArtistModel::class, 'id_artist')
            ->associationMany('recordings', RecordingModel::class, 'id_album');
    }

    public static function prepareWrite(array $data): array
    {
        $data['release_date'] ??= Carbon::now()->unix();
        return parent::prepareWrite($data);
    }

}
