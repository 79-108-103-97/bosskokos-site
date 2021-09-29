<?php

//Общие настройки
//Включение\выключение вывода ошибок на экран
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Включение сесии
session_start();

//Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');

//Вызов Router
    $router = new Router();
    $router->run();
