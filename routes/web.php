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

    //echo "Hello from Lumen!";


    //return $router->app->version();
});


$router->get('/ViewArticle', function () use ($router) {


    $data = \Illuminate\Support\Facades\DB::select('SELECT * FROM users WHERE user_id = ?', [34]);


   // var_dump($data);

    exit;
    foreach ($data as $value) {
        var_dump($value->user_email);
    }
    exit;

    var_dump($results);


    //return $router->app->version();
});

