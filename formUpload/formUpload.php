<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handleUpload.php" method="POST" enctype ="multipart/form-data">
    <label for="file">Chọn một tệp tin:</label>
    <input type="file" id="file" name="fileUpload">
    <input type="submit" value="Upload" name ="btn">
    </form>
</body>
</html>