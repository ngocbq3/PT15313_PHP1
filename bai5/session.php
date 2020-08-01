<?php
//Để làm việc với session cần khai báo hàm 
session_start();

//Khởi tạo session
$_SESSION['username'] = "administrator";
$_SESSION['email'] = "admin@gmail.com";
?>
<!--Hiển thị session-->
<a href="user_sesion.php">User session</a>