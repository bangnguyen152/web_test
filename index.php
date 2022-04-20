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
    <h1 align="center">Báo Dân Trí</h1>
    <?php
    $conn = mysqli_connect('localhost','root','','tin tuc');
    $sql = "select * from tin_tuc";
    $result = mysqli_query($conn,$sql);
    ?>
    <table border="1" width="100%">
        <a href="insert.php"> Thêm bài viết </a>
        <tr>
            <th>Tên Bài</th>
            <th>Ảnh</th>
        </tr>
        <?php foreach ($result as $each_result){ ?>
            <tr>
                <td>
                    <a href="view.php?ma=<?php echo $each_result['Ma'] ?>">
                        <?php echo $each_result['tieu_de'] ?>
                    </a>
                </td>
                <td align="center"><img src="<?php echo $each_result['anh'] ?>" alt="demo" height="160"></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>