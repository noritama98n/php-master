<?php 
    
    $dsn = "mysql:dbname=sample;host=local;charaset=utf8";
    $user = 'root';
    $password ='';

    try{

        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user(id, name, age, email) VALUES(NULL, '田中','28','sample5@sample.com')";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        echo '接続に成功しました。';
    }catch(PDOException $e){
        print($e->getMessage());
        die();
    }

    ?>