<?php
//Mã hóa mật khẩu
$password = password_hash('123456', PASSWORD_DEFAULT);
echo $password;
