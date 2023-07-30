<?php
return [
    'db' => [
        'default' => [
            'db' => 'mysql',
            'driver' => 'pdo_mysql',
            'dbname' => getenv('DB_NAME'),
            'host' => getenv('DB_HOST'),
            'user' => getenv("DB_USER"),
            'password' => getenv('DB_PASS')
        ],
    ],
];
