<?php 

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__."/../models"];
$isDevMode = true;

$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'note',
    'user'     => 'root',
    'password' => '',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);