<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
</head>

<body>
    <h2>Trang quản trị website</h2>
</body>

</html>