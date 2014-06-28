<?php

include ('bangla_date.php');

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('Asia/Dhaka');

echo bangla_date('g:i:s - d/m/y - l d M Y');

?>