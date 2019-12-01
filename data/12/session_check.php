<?php
session_start();
//var_dump($_SESSION);
$profile = $_SESSION['profile'];
$cart = $_SESSION['cart'];
?>
<html>
    <body>
        <p>こんにちは、<?php echo $profile['user_name'];?>
        地域:<?php echo $profile['location']; ?></p>
        <h1>カートの中身</h1>
        <br>
        <table border="1">
            <tr><th>商品ID</th><th>個数</th></tr>
            <?php foreach($cart as $key =>  $var): ?>
            <tr align="center"><td><?php echo $key;?></td></tr>
            <tr align="center"><td><?php echo $var;?></td></tr>
            <?php endforeach ?>
        </table>
        <a href="session_set.php"></a>
    </body>
</html>