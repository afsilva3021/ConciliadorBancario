<?php

require_once __DIR__ . "/Router/Route.php";
require_once __DIR__ . "/Router/Router.php";
require_once __DIR__ . "/Controllers/ConciliadorController.php";

use relatorioconciliado\Router;
use relatorioconciliado\ConciliadorController;


$router = new Router();


$router->addRoute('/', ConciliadorController::class, 'index');


$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($requestPath);
