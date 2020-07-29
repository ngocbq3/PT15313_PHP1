<?php
require_once "../connection.php";
$cate_id = $_GET['id'];

$sql = "DELETE FROM categories WHERE cate_id=$cate_id";
$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
    header("location: danhmuc.php?message=Xóa dữ liệu thành công");
} else {
    header("Location: danhmuc.php?message=Xóa dữ liệu thất bại!!");
}
