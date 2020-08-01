<?php
session_start();
//Kiểm tra xem session có tồn tại không
if (isset($_SESSION['username'])) {
    echo "<h3>Username: " . $_SESSION['username'] . "</h3>";
    echo "<p>Email: " . $_SESSION['email'] . "</p>";
    echo "<a href='xoa_session.php'>Xóa session</a>";
} else {
    echo "Session username chưa tồn tại <a href='session.php'>Tạo session</p>";
}
