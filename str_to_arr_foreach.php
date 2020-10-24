<?php
$str = "9,admin@example.com,8";
$arr = explode(',', $str);
//var_dump($arr);
foreach($arr as $value) {
    var_dump($value);
}
?>

