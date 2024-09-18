<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\Router;
use app\controllers\Productcontroller;

$router = new Router();

// Define routes
$router->get('/', [Productcontroller::class, 'index']);
$router->get('/products', [Productcontroller::class, 'index']);
$router->get('/products/create', [Productcontroller::class, 'create']);
$router->post('/products/create', [Productcontroller::class, 'create']);
$router->get('/products/update', [Productcontroller::class, 'update']);
$router->post('/products/update', [Productcontroller::class, 'update']);
$router->post('/products/delete', [Productcontroller::class, 'delete']);

// Resolve the current URL
$router->resolve();
