<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('new/email', function(){
  $user = new stdClass();
  $user->name = 'Robo';
  $user->email= 'testg2503@gmail.com';
  //return  new \App\Mail\email($user);
  \Illuminate\Support\Facades\Mail::send(new \App\Mail\email($user));
});
