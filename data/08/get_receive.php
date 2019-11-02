<?php
$name = $_GET['name'];
$hobby = $_GET['hobby'];

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>受信ページ</h1>
        <p>貴方の名前は<?php echo $name;?>さんです。</p>
        <p>貴方の趣味は<?php echo $hobby;?>です。</p>
    </body>
</html>