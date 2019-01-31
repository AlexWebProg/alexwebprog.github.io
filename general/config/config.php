<?php
// Определяем максимальное время выполнения скрипта ----------------------------
ini_set('max_execution_time', 3600);

// Старт сессии ----------------------------------------------------------------
session_start();

// Выбор окружения -------------------------------------------------------------
//$environment = 'development';
$environment = 'production';
//$environment = 'testing';

// Задание параметров окружения ------------------------------------------------
switch ($environment) {

    case 'development':
        $baseurl = 'http://sexygrandma.local/';
        /*
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        */
    break;

    case 'production':
        $baseurl = 'http://SexyGrandma.github.io/';
    break;

    case 'testing':
        $baseurl = 'http://www.test.ze3.ru/';
    break;

}

// Обозначение констант --------------------------------------------------------
define('ENVIRONMENT',$environment);
define('BASEURL',$baseurl);
define('ROOT',filter_input(INPUT_SERVER,'DOCUMENT_ROOT',FILTER_SANITIZE_STRING).'/');
define('AUTOLOADER', ROOT.'general/helpers/autoloader.php');
define('SELECTERS', ROOT.'general/selecters/');
define('HELPERS', ROOT.'general/helpers/');
define('HANDLERS', ROOT.'general/handlers/');
define('LIBRARIES', ROOT.'general/libraries/');


// Автолоадер ------------------------------------------------------------------
include_once AUTOLOADER;