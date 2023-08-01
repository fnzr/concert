<?php

require __DIR__ . '/vendor/autoload.php';

Orkester\Manager::init();

$contents = \orkester\GraphQL\Generator\SchemaGenerator::generateAll();
file_put_contents("schema.graphql", $contents);
