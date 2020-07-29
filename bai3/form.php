<?php

if (isset($_POST['btnGui'])) {
    if (!isset($_POST['thanhpho2']) || !isset($_POST['sothich'])) {
        echo "Bạn cần chọn thành phố và sở thích";
    } else {
        $tp = $_POST['thanhpho2'];
        var_dump($tp);
        echo "<br>" . $_POST['gioitinh'];
        $sothich = $_POST['sothich'];
        echo "<br>";
        var_dump($sothich);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý dữ liệu form</title>
</head>

<body>
    <form action="" method="post">
        <select name="thanhpho" id="">
            <option value="HN">Hà Nội</option>
            <option value="HCM">Hồ chí minh</option>
            <option value="HUE">Huế</option>
            <option value="DN">Đà nẵng</option>
            <option value="NA">Nghệ An</option>
            <option value="HP">hải phòng</option>
        </select>
        <br>
        <select name="thanhpho2[]" multiple="4" id="">
            <option value="HN">Hà Nội</option>
            <option value="HCM">Hồ chí minh</option>
            <option value="HUE">Huế</option>
            <option value="DN">Đà nẵng</option>
            <option value="NA">Nghệ An</option>
            <option value="HP">hải phòng</option>
        </select>
        <br>
        <input type="radio" name="gioitinh" value="Nam" id="" checked> Nam<br>
        <input type="radio" name="gioitinh" value="Nữ" id=""> Nữ
        <br>
        <Label>Sở thích</Label>
        <br>
        <input type="checkbox" name="sothich[]" value="Đá bóng" id=""> Đá bóng
        <br>
        <input type="checkbox" name="sothich[]" value="Xem phim" id=""> Xem phim
        <br>
        <input type="checkbox" name="sothich[]" value="Mua sắm" id=""> Mua sắm
        <br>
        <input type="checkbox" name="sothich[]" value="Đọc sách" id=""> Đọc sách
        <br>
        <button type="submit" name="btnGui">Gửi</button>
    </form>
</body>

</html>