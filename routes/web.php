<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix'=>'api/v1'], function() use($router){
    //Notifications
    $router->get('/notifications', 'NotificationsController@index');
    $router->post('/notifications', 'NotificationsController@create');
    $router->get('/notifications/{id}', 'NotificationsController@show');
    $router->put('/notifications/{id}', 'NotificationsController@update');
    $router->delete('/notifications/{id}', 'NotificationsController@destroy');

    //Users
    $router->get('/users', 'UsersController@index');
    $router->post('/users', 'UsersController@create');
    $router->get('/users/{id}', 'UsersController@show');
    $router->put('/users/{id}', 'UsersController@update');
    $router->delete('/users/{id}', 'UsersController@destroy');
});
