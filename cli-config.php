<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;


// Reemplaza esto con el archivo de configuración y inicialización de Doctrine en tu proyecto
require_once 'src/core/doctrine.php';

// Reemplaza esto con el método para obtener el EntityManager en tu aplicación
$entityManager = createEntityManager(); 

return ConsoleRunner::createHelperSet($entityManager);