
<?php

$img = "img/";

$checkDirectory = $img . basename($_FILES["fileUpload"]["name"]);

if(isset($_POST['btn'])){
    if(isset($_FILES['fileUpload'])){
        if($_FILES['fileUpload']['size'] === 0) {
            echo 'bạn chưa chọn file';
        }else if(file_exists($checkDirectory)){
            echo "hình ảnh đã tồn tại";
        }
        else if($_FILES['fileUpload']['size'] === 2000000){
            echo 'file quá dung lượng cho phép';
        }
        else{
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], './img/'.$_FILES['fileUpload']['name']);
            echo 'upload thành công';
        }
    }
}
?>



