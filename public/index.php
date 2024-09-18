<?php
require_once __DIR__ . '/../vendor/autoload.php'; 
use app\Router; 
use app\controllers\Productcontroller; 
$router = new Router();
$productcontroller = new Productcontroller(); 
// Define routes
$router->get('/', [$productcontroller, 'index']); 
$router->get('/products', [$productcontroller, 'index']);
$router->get('/products/create', [$productcontroller, 'create']);
$router->post('/products/create', [$productcontroller, 'create']);
$router->get('/products/update', [$productcontroller, 'update']); 
$router->post('/products/update', [$productcontroller, 'update']);
$router->post('/products/delete', [$productcontroller, 'delete']); // Resolve the current URL 
$router->resolve();