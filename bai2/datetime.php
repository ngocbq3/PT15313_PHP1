<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$date = date("Y-m-d h:i:s");
echo $date;

$now = new DateTime();
echo $now->format("Y-m-d h:i:s");
