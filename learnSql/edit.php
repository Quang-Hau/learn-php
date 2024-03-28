
<?php
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }
$id = $_GET['id'];

require_once 'connect.php';

$editSql = "SELECT * FROM liststudent WHERE id=$id";

$result = mysqli_query($conn, $editSql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="base.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1 class="heading">Xửa danh sách</h1>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                
                <div class="form_group">
                    <input type="text" name="userName" id="username" class="form-control" required value="<?php echo $row['userName'] ?>"required>
                    <label for="username">Tên sinh viên</label>
                </div>
        
                <div class="form_group">
                    <input type="text" name="passWord" id="password" class="form-control" required value="<?php echo $row['passWord'] ?>"required>
                    <label for="password">khóa học</label>
                </div>
                
                
                <button type="submit" id="btn" class="btn btn-success">Update student</button>
        
                <button class="btn btn-success" type="submit"><a style=" text-decoration: none; color:#000;" href="index.php">về trang chủ</a></button>
            </form>
        </div>

    </div>

    <script>
        const btn = document.querySelector('#btn');
    
        btn.onclick = (e) => {
            alert('Are you sure you want to change?')
        }
    
    </script>
</body>
</html>