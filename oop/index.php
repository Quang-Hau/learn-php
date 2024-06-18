<?php

    session_start();
                //__DIR__ lấy đường dẫn tuyệt đối
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

    require_once __DIR__ . '/routers/index.php';

?>