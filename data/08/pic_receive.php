<?php
$err = array();
$img = $_FILES['img'];
var_dump($img);
$type = exif_imagetype($img['tmp_name']);
if($type !== IMAGETYPE_JPEG && $type !== IMAGETYPE_PNG){
    $err['pic'] = '対象ファイルはpngまたはjpgのみです';
}elseif($img['size']> 102400){
    $err['pic'] = 'ファイルサイズは100kb以下にしてください';
}else{
    $extension = pathinfo($img['name'], PATHINFO_EXTENSION);
    $new_img = md5(uniqid(mt_rand(),true)).'.'.$extension;
move_uploaded_file($img['tmp_name'],'./img/'.$img['name']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>受信ページ</h1>
        <?php if(count($err) >0){
            foreach($err as $row){
                echo '<p>'.row.'<p>';
            }
            echo '<a href="./sample8-3_send.php">戻る</a>';
        }else{
            ?>
            <div><img src="http://localhost:8080/08/img/<?php echo $img['name'];?>" alt=""></div>
            <?php } ?>
    </body>
</html>