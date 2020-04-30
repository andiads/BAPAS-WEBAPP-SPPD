<?php
include("../config/func.php");

$str = "bismillah99";
$str2 = "asdfdsad22";
$hased = "";
$decoded = "";

echo $str."<br/>";

$hashed = faroeeCrypt($str);
echo $hashed."<br/>";

if (password_verify($str, $hashed)) {
    echo "password valid ".$str."<br/>";
} else {
    echo "password invalid <br/>";
}

if (password_verify($str2, $hashed)) {
    echo "password valid ".$str2."<br/>";
} else {
    echo "password invalid ".$str2;
}

?>