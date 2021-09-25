<?php

/** @var \Laravel\Lumen\Routing\Router $router */


use App\Routes\Employee\EmployeeRoutes;
use App\Routes\Card\CardRoutes;
use App\Routes\Game\GameRoutes;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

EmployeeRoutes::routes($router);
CardRoutes::routes($router);
GameRoutes::routes($router)
