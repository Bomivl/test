<?php

spl_autoload_register(function ($class){
    include __DIR__ . '/'. str_replace('\\', '/', $class) . '.php';
});

$controller = application\controllers\FrontController::getInstance();
//$controller->route();
//echo $controller->getBody();
