<?php

use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var Router $router */
$router = app(Dingo\Api\Routing\Router::class);

$router->version(env('API_VERSION'), function (Router $router) {

    $router->get('/', function () {
        return response()->json([
            'state' => 0,
            'data'  => [
                'version' => env('API_VERSION'),
            ],
        ]);
    });

});