<?php


namespace app\controllers;
use app\Router;

class Productcontroller
{
    public function index(Router $router)
    {
        $products = $router-> db->getproduct();
        
        echo $router->renderView('products/index',[
            'products'=>$products
        ]);
    }

    public function create()
    {
        echo "create product";
    }

    public function update()
    {
        echo "update product";
    }

    public function delete()
    {
        echo "delete product";
    }
}
