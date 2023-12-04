<?php 
require_once __DIR__ . '/../../vendor/autoload.php';
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Cache\ArrayCache;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

$paths = [__DIR__."/../model"];
$isDevMode = true;
$dbParams = [
    'driver'   => $_ENV['DB_DRIVER'],
    'host'     => $_ENV['DB_HOST'],
    'dbname'   => $_ENV['DB_NAME'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
];

$cache = new ArrayCache();

// Configuración de Doctrine
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, $cache, false);

// Configuración adicional para evitar el uso de SimpleAnnotationReader
$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($paths, false));

try {
    $entityManager = EntityManager::create($dbParams, $config);
} catch (\Exception $e) {
    echo 'Error al crear EntityManager: ' . $e->getMessage();
    exit(1);
}

// Función para obtener el EntityManager
function createEntityManager() {
    global $entityManager;
    return $entityManager;
}
