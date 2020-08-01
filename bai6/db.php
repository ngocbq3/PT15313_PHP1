<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "pt15313-php1";

try {
    $conn = new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8", $username, $password);
} catch (PDOException $e) {
    echo "Lỗi kết nối cơ sở dữ liệu<br>" . $e->getMessage();
}
