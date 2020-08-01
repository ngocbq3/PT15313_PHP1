<?php
//Sử dụng cookie
if (isset($_COOKIE['username'])) {
    echo "<h3>Username: " . $_COOKIE['username'] . "</h3>";
    echo "<a href='xoa_cookie.php'>Xóa cookie</a>";
} else {
    echo "Cookie username không tồn tại";
}
