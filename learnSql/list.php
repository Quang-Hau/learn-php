<?php
 session_start();
 if(!isset($_SESSION['loginEmail'])){
     header("location:login.php");
 }
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
            
        .table{
            margin-top:25px;
            width: 1200px;
        }

        td{
            padding: 20px 0;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        .container{
            min-height:20vh;
        }

        .content {
        max-width: 355px;
        padding: 20px;
        border: none; 
        border-radius: none; 
        box-shadow: none; 
        }

        a{
            text-decoration:none;
            color:#000;
        }
        </style>
</head>
<body>

    <h1 class="heading" >List of student</h1>
<div class="container">
<div class="content">
<form action="search.php" method="POST">
    <div class="form_group">
        <input type="text" name="userSearch" id="userSearch" >
        <label for="userSearch">Tìm tên sinh viên </label>
    </div>
    <div class="form_group">
        <input type="text" name="khSearch" id="khSearch">
        <label for="khSearch">Tìm khóa học </label>

    </div>

        <button class="btn" type="submit" name="buttonSearch" id="button">Tìm</button>
        <button class="btn" type="submit"><a href="index.php">về trang chủ</a></button>
</form>
</div>
</div>
<div class="container">
<table style="margin-top:25px;" class="table">
    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th>Tên sinh viên</th>
            <th> Khóa học </th>
            <th> Edit delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // kết nối với sql
        require_once 'connect.php';

        //Câu lệnh SQL này là để truy vấn và sắp xếp dữ liệu trong bảng "student" theo thứ tự được chỉ định
        $listed_sql = "SELECT * FROM liststudent ";

        //thực thi câu lệnh
        $result = mysqli_query($conn , $listed_sql);


        // quyệt qua các phần tử trả về từ dữ liệu result và in ra
        while($row = mysqli_fetch_assoc($result )){   
        ?>
            <!-- echo $row['id'] . "-" .$row['maSv'] . "-" .$row['hoTen'] . "-" . $row['lop'] . "<br>"; -->
            <tr>
            <td style="border-bottom: 1px solid #ccc;" ><?php echo $row['id']; ?></td>
            <td style="border-bottom: 1px solid #ccc;"><?php echo $row['userName']; ?></td>
            <td style="border-bottom: 1px solid #ccc;"><?php echo $row['passWord']; ?></td>
            <td style="border-bottom: 1px solid #ccc;  text-align: center;">
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
<script>
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        const userSearch = document.getElementById('userSearch').value;
        const idSearch = document.getElementById('idSearch').value;

        if (userSearch === '' || idSearch === '') {
            event.preventDefault(); // Ngăn chặn mặc định sự kiện submit
            alert('Vui lòng nhập cả hai trường tìm kiếm.');
        }
    });


</script>
</body>
</html>