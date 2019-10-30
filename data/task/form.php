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
        'pass' => '3333'
        ),
    5 => array(
        'name' => '田中',
        'team' => 'ceo',
        'pass' => '5555'
        )

    );

?>

<html>
    <head>
       <meta charset="UTF-8">
    </head>
    <body>
        <h1>ログインしてください</h1>
        <form action="task.php" method="POST">
            <label for="user_name">名前</label>
            <select name="user_name" id="user_name">
            <?php foreach ($staffs as $var){ ?>
            <option value="<?php echo $var['name'];?>"><?php echo htmlspecialchars($var['name'].'さん', ENT_QUOTES, 'UTF-8');?></option>
        <?php } ?>
        </select>
            <label for="password">パスワード</label>
            <input type="text" name="password" id="password">
            <input type="submit">
        </form>
    </body>
</html>