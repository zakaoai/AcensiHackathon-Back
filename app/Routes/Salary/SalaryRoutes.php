<?php

namespace App\Routes\Salary;

use Laravel\Lumen\Routing\Router;

class SalaryRoutes
{
    public static function routes(Router $router)
    {
        $router->group(['prefix' => 'salary'], function () use ($router) {
            $router->get('/', 'Salary\SalaryController@allSalary');
            $router->get('/{id}', 'Salary\SalaryController@show');
            $router->get('/search/{search}', 'Salary\SalaryController@search');
        });
    }
}

