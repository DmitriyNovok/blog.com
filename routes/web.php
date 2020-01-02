<?php

$router->get('/', 'ViewController@viewMain');

$router->get('/about', 'ViewController@viewAbout');

$router->get('/services', 'ViewController@viewServices');

$router->get('/contact', 'ViewController@viewContacts');
