<?php
require_once "../connection.php";
if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);
    //Câu lệnh sql bắt lỗi nếu có email hoặc user đã tồn tại rồi
    $sql = "SELECT * FROM users WHERE username='$username' AND user_id<>$user_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($users) > 0) {
        $username_exist = "Username đã có rồi, cần chọn 1 user khác";
    }
}
$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE user_id=$user_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật người dùng</title>
</head>

<body>
    <?php include_once "index.php" ?>
    <form action="" method="post">
        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
        <label for="">Username</label>
        <br>
        <input type="text" name="username" value="<?= $user['username'] ?>" id="">
        <?= isset($username_exist) ?  $username_exist : '' ?>
        <br>
        <label for="">Email</label>
        <br>
        <input type="email" name="email" value="<?= $user['email'] ?>" id="">
        <br>
        <input type="submit" value="Lưu" name="btnLuu">
    </form>
</body>

</html>