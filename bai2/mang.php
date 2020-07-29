<?php
$arr = [
    1, 3, 'hello', 12.3, 'Họ tên', 'nguyễn'
];

echo $arr[2];
echo "<br>";
//Mảng nhiều chiều
$arr2 = [
    [1, 'string', 4, 6, 'hello'],
    ['nguyễn văn an', 'annv@gmail.com', 'Hà nội']
];

echo $arr2[1][0];
echo "<br>";
//Mảng có khóa và giá trị
$arr3 = [
    1 => "Nguyễn Văn Nam",
    'email' => 'namnv@gmail.com',
    'phone' => '090123456'
];
echo $arr3['email'];
echo "<br>";

//Vòng lặp foreach
//Truy cập mạng 1 chiều
foreach ($arr as $item) {
    echo "Phần tử $item<br>";
}
//Truy cập mảng nhiều chiều
foreach ($arr2 as $items) {
    foreach ($items as $item) {
        echo "Phần tử trong mảng arr2: $item<br>";
    }
}

//Truy cập mảng có khóa và giá trị
foreach ($arr3 as $k => $v) {
    echo "Key: $k, Value: $v<br>";
}
