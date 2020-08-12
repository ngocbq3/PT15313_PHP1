<?php
require_once "../connection.php";

//Lấy danh mục sản phẩm
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cate = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);
    if ($_FILES['pro_image']['size'] > 0) {
        $pro_image = $_FILES['pro_image']['name'];
    } else {
        $pro_image = "";
    }
    //Viêt câu lệnh SQL INSERT
    $sql = "INSERT INTO products(cate_id,pro_name, intro, detail, pro_image, price, quantity) VALUES('$cate_id', '$pro_name', '$intro', '$detail', '$pro_image', '$price', '$quantity')";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        if ($_FILES['pro_image']['size'] > 0) {
            move_uploaded_file($_FILES['pro_image']['tmp_name'], "../images/" . $pro_image);
        }
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Thêm dữ liệu thất bại";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <h3>Thêm sản phẩm</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Chọn danh mục sản phẩm</label>
        <br>
        <select name="cate_id" id="">
            <?php foreach ($cate as $c) : ?>
                <option value="<?= $c['cate_id'] ?>"><?= $c['cate_name'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="text" name="pro_name" placeholder="Tên sản phẩm" id="">
        <br>
        <input type="file" name="pro_image" id="">
        <br>
        <input type="number" name="price" placeholder="Giá sản phẩm" id="">
        <br>
        <input type="number" name="quantity" placeholder="số lượng" id="">
        <br>
        <textarea name="intro" id="" cols="130" rows="5" placeholder="Mô tả"></textarea>
        <br>
        <textarea name="detail" id="" cols="130" placeholder="Nội dung sản phẩm" rows="10"></textarea>
        <br>
        <button type="submit" name="btnLuu">Lưu</button>
    </form>
</body>

</html>