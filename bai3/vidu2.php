<?php
require_once "function.php";

if (isset($_POST['btn'])) {
    if (is_numeric($_POST['son'])) {
        $son = $_POST['son'];
        $kq = "Giai thừa của $son! = " . giai_thua($son);
    } else {
        $kq = "Bạn cần nhập vào số";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍnh giai thừa</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="son" value="<?= isset($son) ? $son : 0 ?>" id="">
        <br>
        <button type="submit" name="btn">TÍnh</button>
    </form>
    <?php
    if (isset($kq)) {
        echo $kq;
    }
    ?>
</body>

</html>