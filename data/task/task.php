
<?php
$name = $_POST['user_name'];
$pass = $_POST['password'];

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
        'team' => 'acc',
        'pass' => '2222'
        ),
    3 => array(
        'name' => '山田',
        'team' => 'sale',
        'pass' => '3333'
        ),
    4 => array(
        'name' => '中村',
        'team' => 'acc',
        'pass' => '4444'
    ),
    5 => array(
        'name' => '田中',
        'team' => 'gen',
        'pass' => '5555'
        )
    );
    $task = array(
       'sale'  => array('社訪問','社資料送付'),
       'acc'  => array('帳簿処理','請求書発行','先月の締め'),
       'gen'  => array('求人開始','退職予定者の処理作業')
    );

    foreach ($staffs as $var){ 
    if($name == $var['name'] && $pass == $var['pass']) {
     if($var['team']= 'sale'){
         
     }
   
    } else{
        $err = 'ng';
       
    }
}
echo $err;



?>

<html>
    <head>
        <meta charset="UTF8">
    </head>
    <body>
        
    </body>
</html>