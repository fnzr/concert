<?php

use App\Models\AlbumModel;
use App\Models\ArtistModel;

require __DIR__ . '/vendor/autoload.php';

Orkester\Manager::init();

//$contents = \Orkester\GraphQL\Generator\SchemaGenerator::generateAll();
//file_put_contents("schema.graphql", $contents);
//
//$get = AlbumModel::getCriteria()
//    ->where('artist.id_artist', 'IN',
//        ArtistModel::getCriteria()
//        ->select('id_artist')
//        ->where('name' , '=', 'Mili')
//    )
//    ->get();
//
//mdump($get);



//\Orkester\Persistence\PersistenceManager::beginTransaction();
//$writer = new \Orkester\Resource\ResourceFacade(new \App\Resources\ArtistResource(ArtistModel::class), \Orkester\Manager::getContainer());
//$writer->insert([
//    'name' => 'abc'
//]);
//\Orkester\Persistence\PersistenceManager::rollback();

$generator = new \Orkester\GraphQL\Generator\SchemaGenerator();
$generator->writeOperationSchema('./schemas');
$generator->writeAllResourceSchemas('./schemas/resources');
$generator->writeServiceSchema('./schemas');

\orkester\GraphQL\Generator\SchemaGenerator::generateSchemaFile('./schemas', "schema.graphql");
// (select * from `album`)
// select `artist`.`id_artist` from `artist` where `artist`.`name` = 'Mili'
