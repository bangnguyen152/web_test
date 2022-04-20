<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "tin tuc";
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

$conn = mysqli_connect("$severname","$username","$password","$database");
mysqli_set_charset($conn,'utf8');
$sql = "insert into tin_tuc(tieu_de,noi_dung,anh)
values('$tieu_de','$noi_dung','$anh')";
mysqli_query($conn,$sql);
$erorr =mysqli_error($conn);
echo $erorr;
mysqli_close($conn);
?>
<h1><a href="index.php">Về trang chủ</a></h1>
</body>
</html>

