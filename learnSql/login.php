<?php

require_once 'connect.php';
$messerr='';
if(isset($_POST['login'])){
    session_start();

    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $sql = "SELECT * FROM login WHERE loginName = '$loginEmail' AND loginPass = '$loginPassword'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        $_SESSION['loginEmail'] = $loginEmail;
        header("Location:index.php");
    }else{
        $messerr= "Tài khoản hoặc mật khẩu sai";
    }

}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="base.css">
</head>
<body>
    <div class="container">
        <div class="content">
        <h1 class="heading">Đăng nhập</h1>
        <form action="login.php" method ="POST">
            <div class="form_group">
                <input type="text" name="loginEmail" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form_group">
                <input type="password" name="loginPassword" id="password" required>
                <label for="password">Password</label>
            </div>
            <button class="btn " type="submit" name="login">Đăng nhập</button>
            <h4 class="footer">Bạn chưa có tài khoản <a href="register.php">đăng kí</a></h4>
            <h4 class="messerr">
            <?php echo $messerr; ?>
            </h4>
        </form>
        </div>
    </div>
    <script>
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (email === '' || password === '') {
            event.preventDefault(); // Ngăn chặn mặc định sự kiện submit
            alert('Vui lòng nhập cả hai trường tìm kiếm.');
        }
    });


</script>
</body>
</html>