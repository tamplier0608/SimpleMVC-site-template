<?php

ini_set('memory_limit', '128M');
date_default_timezone_set('UTC');

if (!empty($_GET['debug'])) {
    ini_set('display_errors', 1);
    error_reporting(1);
}

# Define path to application directory
defined('APPLICATION_PATH') ||
define('APPLICATION_PATH', dirname(__FILE__) . '/../application');

define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production');

require_once 'vendor/autoload.php';

//require_once './vendor/SimpleMVC/src/Autoloader.php';
//Autoloader::registerPath(__DIR__ . '/vendor/SimpleMVC/src/');
//spl_autoload_register(array('Autoloader', 'load'));

# Init application config
$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);

# Start application
$app = new Core_Application($config, APPLICATION_ENV);
$app->start();