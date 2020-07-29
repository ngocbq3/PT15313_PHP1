<?php
//Tào hàm tính tổng của 2 số
function tinh_tong($a, $b)
{
    echo $a + $b;
}

function tinh_tong2($a, $b)
{
    return $a + $b;
}

function kiem_tra()
{
    global $soa;
    $soa++;
    echo "<br> soa = $soa";
}
//Hàm tính tổng của nhiều số
function tinh_tong_nhieu_so()
{
    $arr = func_get_args();
    $s = 0;
    foreach ($arr as $a) {
        $s += $a;
    }
    echo 'Tong = ' . $s;
}
//Sử dụng hàm
$soa = 10;
$sob = 12.3;
tinh_tong($soa, $sob);
echo "<br>";
echo tinh_tong2($soa, $sob);
kiem_tra();
echo "<br>";
tinh_tong_nhieu_so(3, 5, 12.3, 22, 1, 90, 100);
