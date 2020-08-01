<?php
//Tạo cookie
//setcookie('tên của cookie', 'giá trị', 'thời gian sống của cookie', 'Đường dẫn');
setcookie('username', 'ngocbq', time() + 60 * 60 * 24, '/');
?>
<a href="user_cookie.php">user cookie</a>