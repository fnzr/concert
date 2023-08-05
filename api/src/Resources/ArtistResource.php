<?php

namespace App\Resources;

use App\Models\AlbumModel;
use App\Models\ArtistModel;
use App\Resources\Input\ArtistInput;
use Orkester\Persistence\Criteria\Criteria;
use Orkester\Persistence\Map\ClassMap;
use Orkester\Resource\BasicResource;
use Orkester\Manager;
use Orkester\Resource\ResourceInterface;

class ArtistResource extends BasicResource
{

    public function __construct()
    {
        parent::__construct(ArtistModel::class);
    }

    public function getAssociatedResource(string $association): ?ResourceInterface
    {
        return match($association) {
            'albums' => Manager::getContainer()->make(AlbumResource::class),
            default => null
        };
    }

    public function upsert(array $data): int|string
    {
        ArtistModel::upsert($data, ['name', 'id_artist']);
        return $this->getCriteria()
            ->where('name', '=', $data['name'])
            ->pluck('id_artist')
            ->get(0);
    }

    public function queryHasMostAlbums(): string
    {
        return ArtistModel::getCriteria()
            ->groupBy('id_artist')
            ->orderBy('count(albums.id_album)', 'desc')
            ->pluck('name')
            ->first();
    }
}
