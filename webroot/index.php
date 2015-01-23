<?php

ini_set('memory_limit', '128M');
date_default_timezone_set('UTC');

# Define path to application directory
defined('APPLICATION_PATH') ||
define('APPLICATION_PATH', __DIR__ . '/../application');

define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production');

require_once __DIR__ . '/../vendor/autoload.php';

# Init application config
$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);

# Start application
$app = new Core_Application($config, APPLICATION_ENV);

if (isset($_GET['debug'])) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

$app->start();
