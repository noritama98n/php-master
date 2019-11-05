<?php
$str1 = ' AB C ';
$str2 = "\t\tこんにちは　";


$pattern = '/^(\d{4})\/(\d{1,2})\/(\d{1,2})$/u';

$result1 = trim($str1);
$result2 = trim($str2);

var_dump($result1);
var_dump($result2);

