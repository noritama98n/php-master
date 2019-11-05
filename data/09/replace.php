<?php
$str1 = ' プログラミングを、習いたい。';

$result1 = preg_replace('/\s|、|。/','',$str1);


var_dump($result1);


?>