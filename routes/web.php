<?php

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
    return view('index');
});

$router->get($_SERVER['SERVER_NAME'].'/about', function () use ($router) {
    return view('inside');
});

$router->get($_SERVER['SERVER_NAME'].'/services', function () use ($router) {
    return view('services');
});

$router->get($_SERVER['SERVER_NAME'].'/contact', function () use ($router) {
    return view('contact');
});
