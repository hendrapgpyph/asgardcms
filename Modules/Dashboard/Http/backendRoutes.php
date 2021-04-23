<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->get('/', [
    'as' => 'dashboard.index',
    'uses' => 'DashboardController@index',
    'middleware' => 'can:dashboard.index',
]);
