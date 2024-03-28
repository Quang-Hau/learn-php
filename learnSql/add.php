<?php
 require_once ("connect.php");

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
        echo 'bạn cần phải nhập dữ liệu ';
    }else if(mysqli_query($conn, $sql)){// thực thi câu lệnh sql
        echo "Lưu thành công.";
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
</head>
<body>
    <button type="submit"><a href="index.php">trở về </a></button>
</body>
</html>