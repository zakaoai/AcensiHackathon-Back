<?php

namespace App\Routes\Game;

use Laravel\Lumen\Routing\Router;

class GameRoutes
{
    public static function routes(Router $router)
    {
        $router->group(['prefix' => 'game'], function () use ($router) {
            //$router->get('/', 'Card\CardController@showAll');
            $router->get('/{id}', 'GameController@sendScore');
            //$router->post('/', 'Card\CardController@store');
        });
    }
}
