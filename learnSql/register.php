<?php
$messerr='';  
$messSuccess='';
if(isset($_POST['buttonRegister'])){
    require_once 'connect.php';
    session_start();
    if(isset($_SESSION['loginEmail'])){
        unset($_SESSION['loginEmail']);
        header("Location:login.php");
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $valid_sql = "SELECT * FROM login WHERE loginName='$username' AND loginPass='$password' AND email='$email'";
    
    $result = mysqli_query($conn,$valid_sql);
     
    if(mysqli_num_rows($result) > 0){
        $messerr = 'Tài khoản hoặc mật khẩu đã tồn tại';
        
    }else{
        $sql = "INSERT INTO login (loginName,loginPass,email) VALUES ('$username' , '$password','$email')";
        
        if(mysqli_query($conn, $sql)){// thực thi câu lệnh sql
            $messSuccess = "Đăng kí thành công.";
        }else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>
<body>
<div class="container">
    <div class="content">
    <h1 class="heading">Đăng kí</h1>
    <form action="register.php" method="POST">
        <div class="form_group">
            <input type="text" name="email" id="email" required>
            <label for="email">Email</label>
        </div>
        <div class="form_group">

            <input type="text" name="username" id="username" required>
            <label for="username">Tên đăng nhập</label>
        </div>

        <div class="form_group">

            <input type="password" name="password" id="password" required>
            <label for="password">Mật khẩu</label>
        </div>
        <button class="btn " type="submit" name="buttonRegister">Register</button>
        <h4 class="footer">Bạn đã có tài khoản <a href="login.php">đăng nhập</a></h4>
        <h4 class="messerr">
            <?php echo $messerr; ?>
        </h4>
        <h4 class="messSuccess">
            <?php  echo $messSuccess;?>
        </h4>
    </form>

   
    </div>
</div>
    <script>
        const form = document.querySelector('form');
    
        form.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
    
            if (username === '' || password === '') {
                event.preventDefault(); // Ngăn chặn mặc định sự kiện submit
                alert('Vui lòng nhập cả hai trường tìm kiếm.');
            }
        });
    
    
    </script>
</body>
</html>