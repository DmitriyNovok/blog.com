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

$app->get('/', function ()  {
    return view('index', ['title' => 'Blog vehicle']);
});

$app->get('/about', function () {
    return view('inside');
});

$app->get('/services', function ()  {
    return view('services');
});

$app->get('/contact', function ()  {
    return view('contact');
});
