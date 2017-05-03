<?php

    use Illuminate\Database\Capsule\Manager as Database;

    $port = 3306;
    $user = 'ritand16_felles';
    $pass = 'blåtthår';
    $db_name = 'ritand16_database';

    $db = new Database();
    $db->addConnection([
        'driver' => 'mysql',
        'host' => 'tek.westerdals.no',
        'port' => $port,
        'username' => $user,
        'password' => $pass,
        'database' => $db_name,
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci'
    ]);

    $db->setAsGlobal();

    $db->bootEloquent();
