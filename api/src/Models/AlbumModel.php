<?php

namespace App\Models;

use Carbon\Carbon;
use Orkester\Persistence\Enum\Key;
use Orkester\Persistence\Enum\Type;

class AlbumModel extends \Orkester\Persistence\Model
{
    public static function map(): void
    {
        parent::map();
        self::table("album");
        self::attribute('id_album', key: Key::PRIMARY);
        self::attribute('name');
        self::attribute('release_date', type: Type::INTEGER);
        self::attribute('id_artist', key: Key::FOREIGN, nullable: false);
        self::associationOne('artist', ArtistModel::class, 'id_artist');
        self::associationMany('recordings', RecordingModel::class, 'id_album');
    }

    public static function transform(array $row): array
    {
        $row['release_date'] ??= Carbon::now()->unix();
        return $row;
    }


    public static function getApiDocs(): array
    {
        return [
            '_class' => 'Represents an album released by an artist',
            'release_date' => 'Release date as a unix_timestamp'
        ];
    }
}
