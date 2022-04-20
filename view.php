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
$conn = mysqli_connect('localhost','root','','tin tuc');
$sql = "select * from tin_tuc where Ma = $ma";
$result = mysqli_query($conn,$sql);
$detail = mysqli_fetch_array($result);
?>
<h1>
    <?php
    echo $detail['tieu_de'];
    ?>
</h1>
<p>
    <?php
    echo nl2br($detail['noi_dung']);
    ?>
</p>
<img src="<?php echo $detail['anh'] ?>" alt="" width="100%">
<br>
<a href="index.php">Về trang chủ</a>
</body>
</html>