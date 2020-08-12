<?php
require_once "../connection.php";

//Lấy danh mục sản phẩm
$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cate = $stmt->fetchAll(PDO::FETCH_ASSOC);
//Lưu lại sản phẩm khi sửa xong
if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);
    if ($_FILES['pro_image']['size'] > 0) {
        $pro_image = $_FILES['pro_image']['name'];
    } else {
        $pro_image = $pro_image;
    }
    //Viêt câu lệnh SQL INSERT
    $sql = "UPDATE products SET pro_name='$pro_name', cate_id='$cate_id', intro='$intro', detail='$detail', price='$price', quantity='$quantity', pro_image='$pro_image' WHERE pro_id=$pro_id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        if ($_FILES['pro_image']['size'] > 0) {
            move_uploaded_file($_FILES['pro_image']['tmp_name'], "../images/" . $pro_image);
        }
        echo "Cập nhật dữ liệu thành công";
    } else {
        echo "Cập nhật dữ liệu thất bại";
    }
}

//Lấy dữ liệu cần sửa (id của sản phẩm)
$pro_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE pro_id=$pro_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <input type="hidden" name="pro_id" value="<?= $product['pro_id'] ?>">
        <label for="">Chọn danh mục sản phẩm</label>
        <br>
        <select name="cate_id" id="">
            <?php foreach ($cate as $c) : ?>
                <!--Kiểm tra xem sản phẩm đang ở danh mục nào, thì selected danh mục đó-->
                <?php if ($c['cate_id'] == $product['cate_id']) : ?>
                    <option value="<?= $c['cate_id'] ?>" selected><?= $c['cate_name'] ?></option>
                <?php else : ?>
                    <option value="<?= $c['cate_id'] ?>"><?= $c['cate_name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="text" name="pro_name" placeholder="Tên sản phẩm" value="<?= $product['pro_name'] ?>" id="">
        <br>
        <input type="file" name="pro_image" id="">
        <?php if (!empty($product['pro_image'])) : ?>
            <input type="hidden" name="pro_image" value="<?= $product['pro_image'] ?>">
            <br>
            <img src="../images/<?= $product['pro_image'] ?>" width="120" alt="">
        <?php endif; ?>
        <br>
        <input type="number" name="price" placeholder="Giá sản phẩm" value="<?= $product['price'] ?>" id="">
        <br>
        <input type="number" name="quantity" placeholder="số lượng" value="<?= $product['quantity'] ?>" id="">
        <br>
        <textarea name="intro" id="" cols="130" rows="5" placeholder="Mô tả"><?= $product['intro'] ?></textarea>
        <br>
        <textarea name="detail" id="" cols="130" placeholder="Nội dung sản phẩm" rows="10"><?= $product['detail'] ?></textarea>
        <br>
        <button type="submit" name="btnLuu">Lưu</button>
    </form>
</body>

</html>