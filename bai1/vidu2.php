<?php
if (isset($_POST['btnGiai'])) {
    $a = $_POST['soa'];
    $b = $_POST['sob'];
    if ($a != 0) {
        $x = -$b / $a;
        $kq = "Phương trình có nghiệm $x";
    } else {
        $kq = "Phương trình vô nghiệm";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT bậc 1</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Số a</label>
        <input type="number" name="soa" id="" value="<?= isset($a) ? $a : '' ?>">
        <br>
        <label for="">Số b</label>
        <input type="number" name="sob" id="" value="<?= isset($b) ? $b : '' ?>">
        <br>
        <button type="submit" name="btnGiai">Giải</button>
    </form>
    <?= isset($kq) ? $kq : "" ?>
</body>

</html>