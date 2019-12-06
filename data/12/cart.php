<?php
session_start();
$cart = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $product =  $_POST['product'];
    $kind = $_POST['kind'];

    if($kind === 'change'){
        $num = $_POST['num'];
        $_SESSION['cart'][$product] = $num;
    }elseif($kind === 'delete'){
        unset($_SESSION['cart'][$product]);
    }
}

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}
var_dump($_SESSION);
?>
<html>
    <body>
        <h1>ショッピングカート</h1>
        <p><a href="shop.php">商品一覧へ</a></p>
        <p><a href="delete.php">カートを全てを空に</a></p>
        <table style="text-align:center;">
        <tr>
            <th>商品</th>
            <th>個数</th>
            <th>数量</th>
            <th>変更ボタン</th>
            <th>削除ボタン</th>
            <?php foreach($cart as $key => $var):?>
        </tr>
         <tr>
                <td>
                    <?php switch($key){
                        case 'desk_01':
                        echo '業務用デスク';
                        break;
                        case 'chair_07';
                        echo '快適椅子';
                        break;
                    } ?>
                </td>
                <td>
                    <?php echo $var ?>個
                </td>
            
            <form action="" method="POST">
                <td>
                    <select name="num" id="">
                        <?php for($i = 1; $i <10; $i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php endfor; ?>
                    </select>
                </td>
                <td>
                    <input type="hidden" name="kind" value="change">
                    <input type="hidden" name="product" value="<?PHP echo $key ?>">
                    <input type="submit" value="変更">
                </td>
            </form>
            <form action="" method="POST">
                <td>
                    <select name="num" id="">
                        <?php for($i = 1; $i <10; $i++):?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php endfor; ?>
                    </select>
                </td>
                <td>
                    <input type="hidden" name="kind" value="delete">
                    <input type="hidden" name="product" value="<?PHP echo $key ?>">
                    <input type="submit" value="削除">
                </td>
            </form>
            </tr>
                <?php endforeach; ?>
        </table>
    </body>
</html>