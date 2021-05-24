<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__."/src/Entities"];
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode, null, null, false);
$params = [
    'dbname' => 'database',
    'user'   => 'user',
    'password' => '12345678',
    'host' => 'mysql',
    'driver' => 'pdo_mysql'
];

$entityManager = EntityManager::create($params, $config);
