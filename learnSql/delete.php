<?php
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }
//lấy dữ liệu cần xóa 
// khi lấy dữ liệu từ trang list để xóa bằng cách  href="delete.php?id=<?php echo $row['id']; >?
//luôn dùng method GET
$idDelete = $_GET['id'];

//kết nối sql
require_once 'connect.php'; 

//câu lệnh xóa sql 

$deleteSql = "DELETE FROM liststudent WHERE id = $idDelete";

//thực thi câu lệnh

mysqli_query($conn,$deleteSql);

//trở về list
header("Location:list.php");





?>