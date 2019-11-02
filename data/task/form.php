<?php
$staffs= array(
    0 => array(
    'name' => '社長',
    'team' => 'ceo',
    'pass' => '1234'
    ),
    1 => array(
        'name' => '鈴木',
        'team' => 'sale',
        'pass' => '1111'
        ),
    2 => array(
        'name' => '高橋',
        'team' => 'ceo',
        'pass' => '2222'
        ),
    3 => array(
        'name' => '山田',
        'team' => 'ceo',
        'pass' => '3333'
        ),
    4 => array(
        'name' => '中村',
        'team' => 'ceo',
        'pass' => '4444'
    ),
    5 => array(
        'name' => '田中',
        'team' => 'ceo',
        'pass' => '5555'
        )
    );?>
    
<html>
    <head>
       <meta charset="UTF-8">
    </head>
    <body>
        <h1>ログインしてください</h1>

        <form action="form.php" method="POST">
            <label for="user_name">名前</label>
            <select name="user_name" id="user_name">
            <?php foreach ($staffs as $var){ ?>
            <option value="<?php echo $var['name'];?>"><?php echo htmlspecialchars($var['name'].'さん', ENT_QUOTES, 'UTF-8');?></option>
        <?php } ?>
        </select>
            <label for="password">パスワード</label>
            <input type="text" name="password" id="password">
            <input type="submit" name="login" value="ログイン">
        </form>
        <?php
        //session_start();
        //$error_message = '';
        if(isset($_POST['login'])){
            if($_POST['user_name'] == $var['name'] && $_POST['password']== $var['pass']) {
            echo 'ok';
           // $_SESSION["USER"] = 'user';
           // header("Location: task.php");
            //exit;
            } else{
                echo 'no';
               //$error_message = 'no';
            }
            
        }
       
        
        ?>


    </body>
</html>