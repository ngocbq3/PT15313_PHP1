<?php
//Xóa cookie
setcookie('username', '', time() - 60 * 60 * 24, '/');
header("location: user_cookie.php");
die;
