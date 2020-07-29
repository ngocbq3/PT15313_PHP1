<?php
//Hàm tính giai thừa của 1 số
function giai_thua($n)
{
    $gt = 1;
    for ($i = 2; $i <= $n; $i++) {
        $gt *= $i;
    }
    return $gt;
}
