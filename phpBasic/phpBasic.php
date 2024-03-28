<?php //declare(strict_type = 1) chế độ nghiêm ngặt trong php

//trong php nhưng kiểu dữ liệu dưới đây khi convert qua bool

//$falseValue = false;
// $zero = 0;
// $emptyString = "";
// $nullValue = null;
// $emptyArray = array();

// var_dump((bool)$falseValue);   // bool(false)
// var_dump((bool)$zero);         // bool(false)
// var_dump((bool)$emptyString);  // bool(false)
// var_dump((bool)$nullValue);    // bool(false)
// var_dump((bool)$emptyArray);    // bool(false)

// $trueValue = true;
// $nonZero = 42;
// $nonEmptyString = "Hello";
// $nonEmptyArray = array(1, 2, 3);

// var_dump((bool)$trueValue);       // bool(true)
// var_dump((bool)$nonZero);         // bool(true)
// var_dump((bool)$nonEmptyString);  // bool(true)
// var_dump((bool)$nonEmptyArray);   // bool(true)






// Hằng trong php
// define('tenHang', 'giá-trị');
// echo tenHang;

//học php '' or ""


//câu lệnh echo : có thển chèn HTML và nối chuỗi cách nhau bằng dâu chấm

// $name = 'Quang Hậu';

// echo 'Tôi tên là :' . $name;





//ứng dụng if else elseif
// $name = 'bao';
// if($name == ' hau') {
//     echo 'tôi tên là :' . $name;
// }elseif($name == 'hieu'){
//     echo 'tôi tên là :' . $name;
// }elseif($name == 'bao'){
//     echo 'tôi tên là :' . $name;
// }else{
//     echo 'không có tên'.' ' . $name . ' ' . 'trong lớp học';
// }





//string

// $name = 'nguyen le quang hau hau';
// echo strlen($name);  strlen() đếm độ dài của chuỗi đếm luôn cả khi viết dấu hoặc không

// echo str_word_count($name); hàm đếm có bao nhiêu từ trong chuỗi

// echo strrev($name); // đảo ngược chuỗi
 

 
// echo strpos($name,'quang') tìm chuỗi và trả về vị trí bắt đầu
// $haystack = "This is a sample string";
// $needle = "sample";

// $pos = strpos($haystack, $needle);

// if ($pos !== false) {
//     echo "Chuỗi con '$needle' được tìm thấy tại vị trí $pos trong chuỗi nguồn.";
// } else {
//     echo "Chuỗi con '$needle' không được tìm thấy trong chuỗi nguồn.";
// }
// Trong ví dụ này, nếu chuỗi con "sample" được tìm thấy trong chuỗi nguồn, nó sẽ in ra vị trí đầu tiên của chuỗi con đó;
//  nếu không, nó sẽ thông báo rằng chuỗi con không được tìm thấy.

//                 //string cần thay thế 
// echo str_replace('nguyen', 'le', $name) ; // ghi đè thay thế chuỗi(string)
//                             //str muốn thay thế 


// $name = ['hau','bao','phuong'];

// $length = count($name);

// for($i = 0; $i < $length; $i++) {
//     echo $name[$i];
// };





// Hàm isset() trong PHP được sử dụng để kiểm tra xem một biến có tồn tại và có giá trị khác null hay không.
//  Hàm này trả về true nếu biến tồn tại và không phải là null, ngược lại trả về false.


// function sum($a ,$b) {
//     return $a + $b;
// };

// echo sum(2,2);



// array json gồm key and value

// $arr = ["key"=>"value","keys"=>"values" ];

// echo $arr['key'];  khi echo key sẽ hiện value


/// arr đa chiều arr lồng arr
// $arr = [
//     ['hậu','2003','vn'],
//     ['bao','2022','vn'],
//     ['phuong','1998','vn'],
// ];
// $arr1 = count($arr);

// for($i = 0 ; $i < $arr1 ;$i++) {   // lặp mảng đa chiêu thủ công

//     $arr2 = count($arr[$i]) ;
//     for($j = 0 ; $j < $arr2 ;$j++) {
//         echo $arr[$i][$j] ;
//     };
// };






// $arr = [
//     ['hậu', '2003', 'vn'],
//     ['bao', '2022', 'vn'],
//     ['phuong', '1998', 'vn'],
// ];

// // Lặp qua mảng chính
// foreach ($arr as $person) {
//     // Lặp qua mỗi mảng con
//     foreach ($person as $value) {
//         echo $value . ' ' ;
//     }
//     echo PHP_EOL;
// }






//count($arr); // kiểm tra độ dài của array
// $arr[] =  ['hiệu', '2011', 'vn']; //thêm phần tử vào array
// $arr[0] =  ['hiệu', '2011', 'vn']; //sửa phần tử có trong array
//unset($arr[0]); //xóa phần tử khỏi array
// print_r($arr); // hiễn thi array






// $arr = [1,4,2,5,3,7,6]; 
// rsort($arr); //sắp xếp mảng theo thứ tự từ lớn đến bé và trả về mảng mới
// sort($arr); //sắp xếp mảng theo thứu tự từ be đến lớn và trả về mảng mới
// print_r($arr); 







//$number = "17-12-2003";
//$arr = explode('-', $number); //Hàm explode() trong ngôn ngữ lập trình PHP được sử dụng để phân tách một chuỗi 
//thành một mảng các phần tử, dựa trên một ký tự hoặc chuỗi con cụ thể mà bạn xác định.
//print_r($arr); result = 17 ,12 ,2003







// $myArray = ['haug', 'bao', 'phuong'];
// $myString = implode("\n", $myArray); // chuyển array sang string
// echo $myString;








// header("Location: https://www.example.com/trangmoi.php");
// exit(); // Đảm bảo sử dụng exit() sau header("Location") để ngăn chặn thực thi tiếp theo








// $globals = "i im  globals";
// function globals() {
//     // echo $globals; // không truy cập được vì biết globals nằm ngoài phạm vi truy cập
//     //    echo $GLOBALS['globals'];
// };
// globals();







//$_POST  $_GET  POST 
//Tóm lại, sự chọn lựa giữa POST và GET phụ thuộc vào mục đích sử dụng. 
//GET thường được sử dụng cho các truy vấn đơn giản và yêu cầu không ảnh hưởng đến dữ liệu,
// trong khi POST thường được sử dụng để gửi dữ liệu lớn hoặc có ảnh hưởng đến dữ liệu trên server.
// $name = $_REQUEST['name'];  thay vì sử dụng $_POST hoặc $_GET thì chúng ta sử dụng $_REQUEST 1 lần là được
//  echo $name






//  $date = date("d-m-Y"); ngày tháng năm
//  echo $date;

//Hàm date_default_timezone_set được sử dụng để đặt múi giờ mặc định cho máy chủ web.
// Ở đây, chúng tôi đã đặt múi giờ thành 'Asia/Ho_Chi_Minh', là múi giờ của Việt Nam. Sau khi đặt múi giờ này, 
//thì hàm date sẽ trả về thời gian hiện tại theo múi giờ của Việt Nam, và bạn sẽ nhận được kết quả đúng.
// date_default_timezone_set('Asia/Ho_Chi_Minh'); // Đặt múi giờ thành múi giờ của Việt Nam
// $hour = date("H:i:sa");
// echo $hour;







//Hàm này giúp việc đọc và hiển thị tập tin trở nên đơn giản, nhất là đối với các tập tin có dung lượng nhỏ. Tuy nhiên,
// nếu bạn cần thực hiện các xử lý phức tạp hơn, như thêm điều chỉnh hoặc xử lý trước khi hiển thị,
// bạn có thể sử dụng các hàm khác như fread() hoặc file_get_contents().
// echo readfile("filetest.txt");

// //đọc file nâng cao             //r tham số để đọc tập tin
// $myFile = fopen("filetest.txt", "r") or die("lỗi file");// mở file
// echo fread($myFile,filesize("filetest.txt"));// đọc file ngoài ra còn fgets($myFile) : chỉ đọc hàng đầu tiên trong tập tin
// fclose($myFile);// đóng file

// $myFile = fopen("filetest.txt", "r") or die("lỗi file");// mở file
// while(!feof($myFile)){
//     echo fgets($myFile); vòng lạp và in kết quả
// }
// fclose($myFile);// đóng file

                                  // quyền tạo ra một file mới
// $myFile = fopen("filetest.txt", "w") or die("lỗi file");// mở file

                                  // quyền viết vào file
// $myFile = fopen("filetest.txt", "a") or die("lỗi file");// mở file
// fwrite($myFile,"hello world"); viết vào file
// fclose($myFile);// đóng file

                                  // quyền tạo ra một file mới và ghi đè nội dung file
// $myFile = fopen("filetest.txt", "w") or die("lỗi file");// mở file
// fwrite($myFile,"hello world"); viết vào file và ghi đè nội dung
// fclose($myFile);// đóng file








// cookie
// $cookieUser = "user";
// $cookieValue = "Quang Hậu";
//                                           // thời hạn lưu trữ cookie 30 ngày
// setcookie($cookieUser,$cookieValue,time()+(86400),"/");
// if(isset($_COOKIE[$cookieUser])){
//     echo "cookie"." ".$cookieValue . " "."đang tồn tại" ;
// }else{
//     echo "cookie"." ".$cookieValue . " "."đã hết hạn" ;
// }
//  muốn xóa cookies thì ta set giá trị thời gian về  âm và value bằng rỗng vd   :    
//    setcookie('cookieUser','',time() - 86400); 






// Các session thường được sử dụng để duy trì trạng thái 
//người dùng qua các trang web và cho phép truy cập an toàn 
//và quản lý dữ liệu của họ. Trong PHP, session thường được quản lý bởi các hàm như 
//session_start() để bắt đầu hoặc mở một session, và $_SESSION siêu biến để truy cập và 
//lưu trữ dữ liệu session.
//tạo 1 session
// session_start();
// $_SESSION['name'] = "quang hậu";
// //hiễn thị session
// echo $_SESSION['name'] ;

// Bắt đầu hoặc khởi động session
// session_start();
// // Thêm một biến session mới
// $_SESSION['new_variable'] = 'Some value';
// // Hiển thị thông báo xác nhận
// echo "Biến session đã được thêm thành công: ".$_SESSION['new_variable'];

// // Bắt đầu hoặc khởi động session
// session_start();
// // Thiết lập giá trị mới cho biến session
// $_SESSION['existing_variable'] = 'New value';
// // Hiển thị thông báo xác nhận
// echo "Biến session đã được chỉnh sửa thành công: ".$_SESSION['existing_variable'];

// // Bắt đầu hoặc khởi động session
// session_start();
// // Xóa biến session
// unset($_SESSION['new_variable']);
// session_destroy(); được xủ dụng để xóa toàn bộ dữ liệu của session và kết thúc session hiện tại
// // Hiển thị thông báo xác nhận
// echo "Biến session đã được xóa thành công.";




// // // lọc chuỗi
// $name = "Some <b>name</b> with <script>alert('dangerous code');</script>";
// $validString = filter_var($name, FILTER_SANITIZE_STRING);
// echo $validString;
// Như bạn có thể thấy, các thẻ HTML và mã JavaScript đã bị loại bỏ khỏi chuỗi $name, 
//chỉ để lại các ký tự và từ thông thường.
// Điều này giúp ngăn chặn các cuộc tấn công XSS





// lọc số nguyên
// $number = 1234.5;
// if(!filter_var($number, FILTER_VALIDATE_INT) === false){
//     echo " đây là số nguyên: " . $number;
// }else {
//     echo " đây không phải số nguyên: " . $number;
// }




//  lọc số IP
// $ip = "192.168.0.1";
// if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
//     echo " đây là số ip: " . $ip;
// }else {
//     echo " đây không phải số ip: " . $ip;
// }




// lọc email
// $gmail = "lenguyenquanghau@gmail.com";  //kiểm tra chuỗi email có khoảng trông hay kí tự không hợp lệ không
// $validGmail = filter_var($gmail, FILTER_SANITIZE_EMAIL);
//                                                   //kiểm tra có phải là 1 email không
// if ($validGmail !== false && filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
//     echo "Đây là Email hợp lệ: " . $gmail;
// } else {
//     echo "Email không hợp lệ: " . $gmail;
// }



// lọc URL
// $URL = "http://localhost:8888/learnPHPbasic/phpBasic/phpBasic.php";  //kiểm tra chuỗi URL có khoảng trông hay kí tự không hợp lệ không
// $validURL = filter_var($URL, FILTER_SANITIZE_URL);
//                                                   //kiểm tra có phải là 1 URL không
// if ($validURL !== false && filter_var($URL, FILTER_VALIDATE_URL)) {
//     echo "Đây là URL hợp lệ: " . $URL;
// } else {
//     echo "URL không hợp lệ: " . $URL;
// }

?>


<!-- <form action="phpBasic.php" method="POST">
    <input type="text" name="name" placeholder="Nhập tên người dùng của bạn">
    <input type="submit">
</form> -->