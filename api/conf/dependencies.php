<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\WhatFailureGroupHandler;
use Monolog\Logger;
use Orkester\Manager;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        Logger::class => function (ContainerInterface $c) {
            $lineFormat = "[%datetime%][%channel%][%level_name%]%context.tag%: %message%" . PHP_EOL;
            $dateFormat = "Y/m/d H:i:s";
            $conf = Manager::getConf("logs");
            $handlers = [];

            if ($conf['level'] == 0) {
                return new Logger($conf['channel'] ?? null);
            }

            $dir = $conf['path'] ?? '';
            if (!file_exists($dir)) {
                mkdir($dir, recursive: true);
            }
            $file = $dir . DIRECTORY_SEPARATOR . 'orkester.log';
            $fileHandler =
                (new StreamHandler($file))
                    ->setFormatter(new LineFormatter($lineFormat, $dateFormat, true));
            $handlers[] = $fileHandler;

            $groupHandler = new WhatFailureGroupHandler($handlers);
            $logger = new Logger($conf['channel'] ?? null);
            $logger->pushHandler($groupHandler);
            return $logger;
        },
//        \App\Resources\Input\ArtistInput::class => function(array $data) {
//            return \App\Resources\Input\ArtistInput::from($data);
//        },
            ]
    );
};
