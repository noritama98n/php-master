<?php
$i = 1;
$sum = 0;

while($i <= 100){
    if($i % 7 === 0){
        $sum += $i;
    }
    $i++;
}
echo '合計は'.$sum.'ですです';
?>