<?php

namespace App\Routes\Card;

use Laravel\Lumen\Routing\Router;

class CardRoutes
{
    public static function routes(Router $router)
    {
        $router->group(['prefix' => 'card'], function () use ($router) {
            $router->get('/', 'Card\CardController@showAll');
            $router->get('/{id}', 'Card\CardController@show');
            $router->post('/', 'Card\CardController@store');
        });
    }
}
