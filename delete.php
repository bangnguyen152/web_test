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
$ma = $_GET['ma'];
require "connect.php";
$sql = "delete from tin_tuc where Ma = $ma";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<h1><a href="index.php">Về trang chủ</a></h1>
</body>
</html>
