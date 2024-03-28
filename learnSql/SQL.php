<?php

// $result = mysqli_query($conn, câu lệnh sql);
// mysqli_num_rows($reslt ); //đếm có bao nhiêu hàng dữ liệu trong bảng 



// <?php
// // Kết nối tới cơ sở dữ liệu
// $connection = mysqli_connect("localhost", "username", "password", "database");

// // Kiểm tra kết nối
// if (!$connection) {
//     die("Kết nối không thành công: " . mysqli_connect_error());
// }

// // Thiết lập truy vấn SQL
// $sql = "SELECT * FROM users WHERE (age > 18 AND gender = 'male') OR (age > 21 AND gender = 'female') ORDER BY name LIMIT 10";

// // Thực thi truy vấn
// $result = mysqli_query($connection, $sql);

// // Kiểm tra kết quả và hiển thị
// if (mysqli_num_rows($result) > 0) {
//     // Lặp qua từng hàng kết quả
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "Tên: " . $row["name"]. " - Tuổi: " . $row["age"]. " - Giới tính: " . $row["gender"]. "<br>";
//     }
// } else {
//     echo "Không có kết quả nào được tìm thấy.";
// }

// // Đóng kết nối
// mysqli_close($connection);

// Trong ví dụ này:

// WHERE được sử dụng để lọc các hàng dựa trên các điều kiện đã cho.
// OR được sử dụng để kết hợp các điều kiện, cho phép lựa chọn các hàng thỏa mãn ít nhất một trong các điều kiện.
// ORDER BY được sử dụng để sắp xếp kết quả theo một cột cụ thể (ở đây là name).
// LIKE được sử dụng để tìm kiếm một mẫu ký tự trong một cột.
// LIMIT được sử dụng để giới hạn số lượng hàng trả về.
// AND được sử dụng để kết hợp các điều kiện, yêu cầu các hàng phải thỏa mãn tất cả các điều kiện.
// ?>



