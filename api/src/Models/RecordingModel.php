<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Map\ClassMap;

class RecordingModel extends \Orkester\Persistence\Model
{
    public static function map(ClassMap $classMap)
    {
        $classMap
            ->table("recording")
            ->attribute('id_recording', key: Key::PRIMARY)
            ->attribute('name')
            ->associationOne('album', AlbumModel::class, 'id_album');
    }
}
