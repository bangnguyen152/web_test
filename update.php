<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require "connect.php";
$ma = $_GET['ma'];
$sql = "select * from tin_tuc where Ma = $ma";
$result = mysqli_query($conn,$sql);
$detail = mysqli_fetch_array($result);

?>
<form method="post" action="update_process.php?ma=<?php echo $ma?>">
    <input type="hidden" name="ma" value="<?php echo $ma ?>" >
    Tiêu đề
    <input type="text" name="tieu_de" value="<?php echo $detail['tieu_de'] ?>" size="500">
    <br>
    Nội Dung
    <textarea name="noi_dung"><?php echo $detail['noi_dung'] ?></textarea>
    <br>
    Ảnh
    <input type="text" name="anh" value="<?php echo $detail['anh']?>">
    <br>
    <button>Sửa</button>
</form>
</body>
</html>