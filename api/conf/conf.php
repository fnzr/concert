<?php

return [
    'name' => 'Concert',
    'options' => [
        'app' => 'concert',
        'timezone' => "America/Sao_Paulo",
        'tmpPath' => sys_get_temp_dir(),
        'fetchStyle' => PDO::FETCH_ASSOC,
        'db' => 'default'
    ],
    'session' => [
        'handler' => "file",
        'timeout' => "0",
        'exception' => false,
        'check' => true,
        'dbsession' => false,
    ],
    'logs' => [
        'channel' => 'orkester',
        'path' => '/var/log/orkester',
        'level' => 2,
        'handler' => "socket",
        'peer' => 'localhost',
        //'strict' => '127.0.0.1',
        'port' => 9999,
        'console' => 1,
        'stdout' => false,
        'errorCodes' => [
            E_ERROR,
            E_WARNING,
            E_PARSE,
            E_RECOVERABLE_ERROR,
            E_USER_ERROR,
            E_COMPILE_ERROR,
            E_CORE_ERROR
        ],
    ],
    'cache' => [
        'type' => "apcu", // php, java, apc, apcu, memcache
        'path' => __DIR__ . '/../var/cache',
        'memcache' => [
            'host' => "127.0.0.1",
            'port' => "11211",
            'default.ttl' => 0
        ],
        'apc' => [
            'default.ttl' => 0
        ]
    ],
];
