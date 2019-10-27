<?php
$time = date('G' + 9);

if ($time < 12){
    echo '午前です';
}elseif($time >= 12){
    echo '午後です';
}
echo phpinfo();
?>