<?php
define('_APP', 1); // Definir Constante para Verificar ejecución
//DISPLAY ERRORS CONFIGURACION
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//SYSTEM CONFIG
$rootM = __DIR__ . '/';

//AUTOLOAD
require $rootM . 'vendor/autoload.php'; //Autoload init
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); //Dotenv Init
$dotenv->load(); //Dotenv Loadvard

//INCLUDE CONFIGURATIONS AND PATHS
include($rootM . 'configs/paths.php');
include($rootM . 'configs/functions.php');
include($rootM . 'configs/configs.php');
