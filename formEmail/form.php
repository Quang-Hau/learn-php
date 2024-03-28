<?php
$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //isset($_POST['btn'])
    if (empty($_POST['email'])) {
        $error = 'Vui lòng nhập địa chỉ email của bạn';
    }else{

        $email = $_POST['email'];
        // if(!preg_match("/^[a-zA-Z]*$/",$email)){
        // $error = 'Vui lòng không nhập kí tự đặt biệt';
        // }else{
        //     echo $email;
        // }

        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = 'Vui lòng nhập một địa chỉ email hợp lệ';
        }else{
             echo $email;
            }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
        }

        div {
            color: red;
        }
    </style>
</head>
<body>
    <form action="form.php" method='POST'>
        <div><?php echo $error ?></div>
        <input type="text" name='email' placeholder='Nhập địa chỉ Email'>
        <input type="submit" value='btn' name ='btn'>
    </form>
</body>
</html>
