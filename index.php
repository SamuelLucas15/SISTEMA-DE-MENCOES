<?php

use Senac\SistemaDeMencoes\Controllers\{
    Controller, RegisterFormController, RegisterController, Error404Controller};

use Senac\SistemaDeMencoes\Repositories\RepositoryUser;

use Senac\SistemaDeMencoes\Config\Database;

require_once __DIR__ . '/vendor/autoload.php';

$userRepository = new RepositoryUser(Database::getConnection());

$routes = require_once __DIR__ . '/Config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/'; //se não existir path info o valor atribuído à variavel será / (inicial)
$httpMethod = $_SERVER['REQUEST_METHOD']; //POST ou GET

$key = "$httpMethod|$pathInfo";
if(array_key_exists($key, $routes)){
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    
    $controller = new $controllerClass($userRepository);

}else{
    $controller = new Error404Controller();
}
/** @var Controller $controller */
$controller->processaRequisicao();
