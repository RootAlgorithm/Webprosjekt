<?php

    use Illuminate\Database\Capsule\Manager as Database;

    $port = 3306;
    $user = 'morkai16_felles';
    $pass = 'blåtthår';
    $db_name = 'slideshow';

    $db = new Database();
    $db->addConnection([
        'driver' => 'mysql',
        'host' => 'tek.westerdals.no',
        'port' => $port,
        'username' => $user,
        'password' => $pass,
        'database' => $db_name,
        'collation' => 'utf8_general_ci'
    ]);
    $db->bootEloquent();
