#!/usr/bin/php
<?php

use GraphQL\Utils\BuildSchema;
use Orkester\GraphQL\Context;
use Orkester\Manager;

require __DIR__ . '/vendor/autoload.php';

Orkester\Manager::init();

$contents = \orkester\GraphQL\Generator\SchemaGenerator::generateAll();
file_put_contents("schema.graphql", $contents);

//$command = <<<EOD
//query { artists { id, artist:name, albums { name recordings { id, name } } } }
//EOD;

//$command = <<<'EOD'
//query {
//    albums
//    {
//        name
//        artist {
//            name
//        }
//    }
//}
//EOD;
//
////$command = <<<'EOD'
////query {
////    albums {
////        name
////        artist(pluck: "name") {
////            name
////        }
////    }
////}
////EOD;
//
////$command = <<<'EOD'
////query {
////    artists {
////        name
////        albums(pluck: "name") {
////            name
////        }
////    }
////}
////EOD;
//
//$variables = ['value' => 'Kid'];
////$result = \App\Models\ArtistModel::insert([ ['name' => 'Kid'],  ['name' => 'Kid2'], ['name' => 'Kid3'],  ['name' => 'Kid4']]);
//
////mdump(json_encode($result));
//$x = [
//    [
//        'id' => 20,
//        'name' => 'Towa'
//    ],
//    [
//        'id' => null,
//        'name' => 'Suisei'
//    ]
//];
////$result = \App\Models\ArtistModel::upsert($x, ['id'], ['name']);
////mdump($result);
//
//mdump(\App\Models\UserModel::getCriteria()->get('groups.name'));

//$acl = new \Orkester\Security\AccessControlList();
//var_dump($acl->isAllowed(\App\Models\ArtistModel::class, 3, "read.id"));
//var_dump($acl->isAllowed(\App\Models\ArtistModel::class, null, "read.id"));
//var_dump(\Orkester\GraphQL\Executor::run($command));
