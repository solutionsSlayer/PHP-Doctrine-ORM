<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


require_once join(DIRECTORY_SEPARATOR, ['vendor', 'autoload.php']);

$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "core", "Entity"])
];

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'charset'  => 'utf8',
    'user'     => 'ubuntu',
    'password' => 'ubuntu',
    'dbname'   => 'league_of_legend',
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);

$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;
