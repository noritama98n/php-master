
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
        'team' => '営業',
        'pass' => '1111'
        ),
    2 => array(
        'name' => '高橋',
        'team' => '経理',
        'pass' => '2222'
        ),
    3 => array(
        'name' => '山田',
        'team' => '営業',
        'pass' => '3333'
        ),
    4 => array(
        'name' => '中村',
        'team' => '経理',
        'pass' => '4444'
    ),
    5 => array(
        'name' => '田中',
        'team' => '総務',
        'pass' => '5555'
        )
    );
    $task = array(
       '営業'  => array('社訪問','社資料送付'),
       '経理'  => array('帳簿処理','請求書発行','先月の締め'),
       '総務'  => array('求人開始','退職予定者の処理作業')
    );

?>

<html>
    <head>
        <meta charset="UTF8">
    </head>
    <body>
     
    <?php if($name == $staffs[1]['name'] && $pass == $staffs[1]['pass']) { ?>
     <h1><?php echo $name.'さんのタスク('.$staffs[1]['team'].')';?></h1>   
     <ul>
         <li><?php echo 'A'.$task['営業'][0];?></li>
         <li><?php echo 'B'.$task['営業'][1];?></li>
         
     </ul>
     <?php } elseif ($name == $staffs[2]['name'] && $pass == $staffs[2]['pass']) { ?>
     <h1><?php echo $name.'さんのタスク('.$staffs[2]['team'].')';?></h1>   
     <ul>
         <li><?php echo $task['経理'][0];?></li>
         <li><?php echo $task['経理'][1];?></li>
         
     </ul>
     <?php } elseif ($name == $staffs[3]['name'] && $pass == $staffs[3]['pass']) { ?>
     <h1><?php echo $name.'さんのタスク('.$staffs[3]['team'].')';?></h1>   
     <ul>
         <li><?php echo 'C'.$task['営業'][0];?></li>
         <li><?php echo 'D'.$task['営業'][1];?></li>
         <li><?php echo 'E'.$task['営業'][1];?></li>
     </ul>
     <?php } elseif ($name == $staffs[4]['name'] && $pass == $staffs[4]['pass']) { ?>
     <h1><?php echo $name.'さんのタスク('.$staffs[4]['team'].')';?></h1>   
     <ul>
        <li><?php echo $task['経理'][1];?></li>
        <li><?php echo $task['経理'][2];?></li>
         
     </ul>
     <?php } elseif ($name == $staffs[5]['name'] && $pass == $staffs[5]['pass']) { ?>
     <h1><?php echo $name.'さんのタスク('.$staffs[5]['team'].')';?></h1>   
     <ul>
        <li><?php echo $task['総務'][0];?></li>
        <li><?php echo $task['総務'][1];?></li>
         
     </ul>
     <?php }elseif($name == $staffs[0]['name'] && $pass == $staffs[0]['pass']){?>
         <h1><?php echo $name.'さん,今日のみんなのタスクは下記の通りです。';?></h1> 
         <ul>
             <li></li>
         </ul>

    <?php }else{
         echo 'パスワードが間違っています';
    } ?>

    </body>
</html>