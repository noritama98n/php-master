<?php
$attend = 1;
//0は欠席 出席は1
$place = 'b';

if ($stand === 0){
 echo 'パーティを欠席にて承りました';
}elseif($stand === 1){
    echo 'パーティを出席にて承りました';
}else{
    echo 'パーティを出席にて承りました';
    if ($place === 'a'){
        echo '会場はAホテルでございます';
    }elseif($place === 'b'){
        echo '会場はBホテルでございます';
    }
}
?>