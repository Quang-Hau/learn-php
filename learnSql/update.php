<?php
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }
$username = $_POST['userName'];
$password = $_POST['passWord'];
$id = $_POST['id'];

require_once 'connect.php';

$updateSql = "UPDATE liststudent SET userName = '$username',passWord = '$password' WHERE id = $id";


mysqli_query($conn, $updateSql);

header('location:list.php');
?>