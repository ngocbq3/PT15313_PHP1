<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pt15313-php1';
try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    //echo "Kết nối cơ sở dữ liệu thành công";
} catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại<br>" . $e->getMessage();
}
