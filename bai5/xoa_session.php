<?php
session_start();
//Xóa toàn bộ session trong phiên làm việc
//session_destroy();
//Xóa session email
unset($_SESSION['email']);

header("location: user_sesion.php");
