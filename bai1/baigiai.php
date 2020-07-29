<?php
$a = $_POST['soa'];
$b = $_POST['sob'];
if ($a != 0) {
    $x = -$b / $a;
    echo "Phương trình có nghiệm $x";
} else {
    echo "Phương trình vô nghiệm";
}
