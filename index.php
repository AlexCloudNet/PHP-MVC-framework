<?php
session_start();


use core\Router;

require 'core/Dev.php';
// Автозагрузка классов
spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if(file_exists($path)){
        require $path;
    }

});

Router::start_matches();