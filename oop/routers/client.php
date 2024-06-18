<?php


    use Hauhn\PhpOop\Controllers\HomeController;
    //định nghĩa các đường dẫn của client


    $router->get('/', HomeController::class . '@index');
    $router->post('/', HomeController::class . '@testValidation');
    $dotenv->load();
    $router->get('/about', function () {
        echo 'Trang giới thiệu';
    });

    // $router->get('/movies/{movieId}/photos(/\d+)?', function($movieId, $photoId) {
    //     echo 'movie #' . $movieId . 'photo #' . $photoId ;
    // });

