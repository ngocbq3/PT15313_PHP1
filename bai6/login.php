<?php
session_start();
require_once "db.php";

if (isset($_POST['btnLogin'])) {
    extract($_REQUEST);
    //Câu lệnh SQL với điều kiện là username
    $sql = "SELECT * FROM users WHERE username='$username'";
    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //Lấy dữ liệu
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //Nếu người dùng nhập đúng username
    if ($user != false) {
        //Kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            $_SESSION['user']['name'] = $username;
            $_SESSION['user']['avatar'] = $user['avatar'];
            header("location: index.php");
            die;
        } else {
            $pass_error = "Mật khẩu không chính xác";
        }
    } else {
        $user_error = "Username không chính xác";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h3>Đăng nhập</h3>
    <form action="" method="post">
        <label for="">Username</label>
        <br>
        <input type="text" name="username" id="">
        <?php
        if (isset($user_error)) {
            echo $user_error;
        }
        ?>
        <br>
        <label for="">password</label>
        <br>
        <input type="password" name="password" id="">
        <?php
        if (isset($pass_error)) {
            echo $pass_error;
        }
        ?>
        <br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>

</html>