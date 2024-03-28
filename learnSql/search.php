<?php
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }
// Tắt hiển thị các chi tiết lỗi
ini_set('display_errors', 'off');
// Đặt cấp độ báo lỗi
error_reporting(E_ALL & ~E_NOTICE);

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
    <script src="https://kit.fontawesome.com/a20096ab2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="base.css">
    <style>
        .container{
        min-height: 25vh;
        display: flex;
        justify-content: center;
        align-items: center;
        }
         a{
            text-decoration:none;
            color:#000;
        }

        h2{
            text-align:-webkit-center; 
        }
        h4{
            text-align:-webkit-center; 
        }

        .content {
        max-width: 355px;
        padding: 20px;
        border: none; 
        border-radius: none; 
        box-shadow: none; 
        }

        .table{
            margin-top:25px;
            width: 1200px;
        }

        td{
            padding: 20px 0;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
<?php
        $searchUser = $_POST['userSearch'];
        $khSearch = $_POST['khSearch'];
        $headErr = '';
        $messerr = '';
        // kết nối với sql
        require_once 'connect.php';

        $searchUser = trim($searchUser);
        $khSearch = trim($khSearch);


        $sql = "SELECT * FROM liststudent WHERE userName='$searchUser' AND passWord='$khSearch'";

        //thực thi câu lệnh
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) === 0){
            $headErr = 'Chú Ý!';
            $messerr = 'Dữ liệu bạn tìm không tồn tại vui lòng kiểm tra lại.';
        }

        // quyệt qua các phần tử trả về từ dữ liệu result và in ra
        while($row = mysqli_fetch_assoc($result) ){ 
            
        ?>

<div class="container"> 
<table  class="table">
    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th>Tên sinh viên</th>
            <th> Khóa học </th>
            <th> Edit delete</th>
        </tr>
    </thead>
    <tbody>
            <!-- echo $row['id'] . "-" .$row['maSv'] . "-" .$row['hoTen'] . "-" . $row['lop'] . "<br>"; -->
            <tr>
            <td  ><?php echo $row['id']; ?></td>
            <td ><?php echo $row['userName']; ?></td>
            <td ><?php echo $row['passWord']; ?></td>
            <td >
            <a style="margin-right:22px;" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
            <a id="delete" onclick = "return confirm('you want to delete this line ?'); "  style="color:red;" href="delete.php?id=<?php echo $row['id']; ?>" > <i class="fa-solid fa-delete-left"></i></a>
            </td>
            </tr>
        <?php
        };
        ?>
    </tbody>

</table>
</div>
        <div class="container"> 
            <div class="content">
                <h2  class="messerr"><?php echo $headErr; ?></h2>
                <h4      class="messerr"> <?php echo $messerr; ?></h4>
                <button class="btn" type="submit"><a href="index.php">về trang chủ</a></button>
                <button class="btn" type="submit"><a href="list.php">list User</a></button>

            </div>  
        </div>

</body>
</html>