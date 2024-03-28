<?php
 session_start();
if(isset($_SESSION['loginEmail'])){
    unset($_SESSION['loginEmail']);
}
header("Location:login.php");
    

?>