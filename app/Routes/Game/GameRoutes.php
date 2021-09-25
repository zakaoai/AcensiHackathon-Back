<?php

namespace App\Routes\Game;

use Laravel\Lumen\Routing\Router;

class GameRoutes
{
    public static function routes(Router $router)
    {
        $router->group(['prefix' => 'game'], function () use ($router) {
            $router->get('/getCard/{id}', 'GameController@getCardByGame');
            $router->get('/score', 'GameController@getScore');
        });
    }
}
