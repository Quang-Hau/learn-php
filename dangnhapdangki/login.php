<?php
    session_start();

    if(isset($_SESSION['email'])){
        header('Location:admin.php');
    }

    if(isset($_POST['dangnhap'])) {
        $email= $_POST['email'];
        $password= $_POST['password'];
        
        if($email === 'lenguyenquanghau@gmail.com' && $password === '123456'){
            $_SESSION['email'] = $email;
            header('Location:admin.php');
        }else{
            if(empty($email) && empty($password)){
                echo 'hãy điền thông tin đăng nhập';
            }else{
                echo 'tài khoản hoặc mật khẩu sai';
            }
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method ="POST">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" >
        <label for="password">Password</label>
        <input type="text" name="password" id="password" >
        <button type="submit" name="dangnhap">Đăng nhập</button>
    </form>
</body>
</html>