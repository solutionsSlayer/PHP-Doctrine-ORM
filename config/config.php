<?php

return [
    'database' => [
        'table' => 'league_of_legend',
        'username' => 'ubuntu',
        'password' => 'ubuntu',
        'host' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
