<?php
var_dump($_POST);
$name = $_POST['name'];
$sex = (int)$_POST['sex'];
$blood = $_POST['blood'];
$comment = $_POST['comment'];
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>受信ページ</h1>
        <p>貴方の名前は<?php echo $name;?>さんです。</p>
        <p>性別は
            <?php
            if($sex === 1){
                echo '男性';
            }elseif($sex === 2){
                echo '女性';
            } ?>
        です。</p>
        <p>血液型は<?php echo $blood;?>型です。</p>
        <p>
        <?php echo nl2br($comment);?>
        </p>
        
    </body>
</html>