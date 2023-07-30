<?php

namespace App\Models;

use Orkester\Persistence\Enum\Key;

class RecordingModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("recording");
        self::attribute( 'id_recording', key: Key::PRIMARY);
        self::attribute('name');
        self::associationOne('album', AlbumModel::class, 'id_album');
    }
}
