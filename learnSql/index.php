<?php
 require_once ("connect.php");
$messerr='';
$messSuccess='';
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $userName = $_POST["username"];
    $password = $_POST["password"];

    // Tạo câu lệnh SQL
    $sql = "INSERT INTO liststudent (userName, passWord) VALUES ('$userName', '$password')";

    //check trước khi thêm dữ liệu

    if(empty($userName) || empty($password)) {
        $messerr = 'bạn cần phải nhập dữ liệu ';
    }else if(mysqli_query($conn, $sql)){// thực thi câu lệnh sql
        $messSuccess = "Lưu thành công.";
    }else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
    <style>
        @media(max-width:46.1875em){
            form{
                padding: 5px;
                display: flex;
                flex-direction: column;
            }
        }
        @media(max-width:63.9375em) {
            .content{
                margin :0 50px;
            }
        }
        a{
            text-decoration:none;
            color:#000;
        }
        .messSuccess{

            padding: 0px 26px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="content">
       <h2 class="heading">wellcome <?php echo $_SESSION['loginEmail'];?></h2>
        <h1 class="heading">Trang chủ</h1>
        <form action="index.php" method="POST">
            <div class="form_group">
            <input type="text" name="username" id="userName" required>
        <label for="userName">Thêm sinh viên</label>
            </div>
            <div class="form_group">
            <input type="text" name="password" id="password" required>
        <label for="password">Niên khóa</label>
            </div>
            <button class="btn " type="submit" name="button">lưu</button>
        </form>
        <button class="btn " type="submit"><a href="list.php">list User</a></button>
        <button class="btn " type="submit"><a href="logout.php">logout</a></button>
        <h4 class="messerr">
            <?php  echo $messerr;?>
        </h4>
        <h4 class="messSuccess">
            <?php  echo $messSuccess;?>
        </h4>
        </div>
    </div>
   
</body>
</html>
