<?php
$id = '';
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}

$dsn = "mysql:host=db; dbname=sample";
$user = 'user';
$password ='userpass';
$data = [];

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = <<<SQL
    SELECT user.name, 
        user.age,
        club.club_name,
        club.count,
        club.overview
    FROM user
    JOIN club ON user.club_id = club.club_id
    WHERE user.id = :id
    LIMIT 1
SQL;
    
    $stm = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row);
    
}catch(PDOException $e){
    echo ('接続エラー：'.$e->getMessage());
    die();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
        .search{float:right;}
        </style>
    </head>
    <body>
        <div class="search">
            <p>会員IDを入力してください</p>
            <form action="" method="GET">
                <input type="text" name="id">
                <input type="submit" value="確認する">
            </form>
        </div>
        <h1>会員データ</h1>
        <table border="1">
            <tr>
                <th>お名前</th>
                <th>年齢</th>
                <th>クラブ</th>
                <th>月の活動回数</th>
                <th>概要</th>
            </tr>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['club_name'];?></td>
                <td><?php echo $row['count'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo nl12br($row ['overview']);?></td>
            </tr>
        </table>
    </body>
</html>
