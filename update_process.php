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
$ma = $_POST['ma'];
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];
require "connect.php";
$sql = "update tin_tuc
        set
            tieu_de = '$tieu_de',
            noi_dung = '$noi_dung',
            anh = '$anh'
        where Ma = $ma";
mysqli_query($conn,$sql);
$erorr =mysqli_error($conn);
echo $erorr;
mysqli_close($conn);
?>
<h1><a href="index.php">Về trang chủ</a></h1>
</body>
</html>

