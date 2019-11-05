<?php
$sentences = <<<EOD
初めまして。
私の名前は田中です。
休日はジョギングをしています。

EOD;

$result = preg_match('/^休日/um', $sentences);
var_dump($result);

?>