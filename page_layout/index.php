<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin : 0;
            box-sizing: border-box;
        }
        ul{
            display: flex;
            list-style: none;

        }
        
        li{

            display: flex;
            justify-content:  space-around ;
            width: 1200px;
        }

        a{
        
            text-decoration: none;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php?layout_page=timkiem">tìm kiếm</a></li>
        <li><a href="index.php?layout_page=giohang">giỏ hàng</a></li>
        <li><a href="index.php?layout_page=sanpham">sản phẩm</a></li>
        <li><a href="index.php?layout_page=trangchu">trang chủ</a></li>
    </ul>
</body>
</html>

<?php
    if(isset($_GET['layout_page'])){
        switch($_GET['layout_page']) {
            case 'timkiem':
                include 'timkiem.php';
                break;

            case 'giohang':
                include 'giohang.php';
                break;

            case 'sanpham':
                include 'sanpham.php';
                break;

            case 'trangchu':
                include 'trangchu.php';
                break;

            default: 
                include 'index.php';
        }
    }
?>
