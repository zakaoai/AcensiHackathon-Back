<?php

/** @var \Laravel\Lumen\Routing\Router $router */


use App\Routes\Employee\EmployeeRoutes;
use App\Routes\Card\CardRoutes;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

EmployeeRoutes::routes($router);
CardRoutes::routes($router);
