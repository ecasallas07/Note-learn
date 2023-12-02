<?php 

//TODO:Configuration of Errors 
error_reporting(E_ALL & ~E_NOTICE);
//display_errors that users watch error is be false

// Configuración para no mostrar errores directamente a los usuarios
ini_set('display_errors',0);
// Habilitar el registro de errores en un archivo
ini_set('log_errors',1);

// Ignorar errores repetidos
ini_set('ingnore_repeat',TRUE);

// Configuración para informar errores en formato HTML
ini_set('html_errors',1);

//TODO: Establecer la ubicación del archivo de registro de errores extension log
ini_set('error_log','php-execution-error.log')

error_log("Reporting Errors");


//Composer loadad files
require 'vendor/autoload.php';
