<?php
$langauge = 2;

if($language === 1){
    echo 'こんにちは';
}elseif( $language === 2){
    echo 'hello';
}elseif($language === 3){
    echo 'bonjour';
}else{
    echo '入力した数値が違います';
}
?>