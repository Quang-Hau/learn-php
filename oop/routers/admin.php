<?php
//gom nhóm  cấp độ đường dẫn
$router->mount('/admin', function () use ($router) {

    // will result in '/admin/'
    $router->get('/', function () {
        echo 'admin overview';
    });

    // will result in '/admin/products/list'
    $router->mount('/products', function () use ($router) {

        $router->get('/list', function () {
            echo 'product list';
        });

        $router->get('/create', function () {
            echo 'product create';
        });

        $router->get('/edit', function () {
            echo 'product edit';
        });
    });
});
