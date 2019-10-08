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

$router->get('/about', function () use ($router) {
    return view('inside');
});

$router->get('/services', function () use ($router) {
    return view('services');
});

$router->get('/contact', function () use ($router) {
    return view('contact');
});
