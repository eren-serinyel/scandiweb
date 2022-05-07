<?php

require_once 'autoload.php';
require_once 'config.php';

use Scandiweb\Router;

$router = new Router();

$router->get('/', 'index');
$router->post('/', 'destroy');
$router->get('/add-product', 'createIndex');
$router->post('/add-product', 'store');