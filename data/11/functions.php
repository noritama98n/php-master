<?php
function html_escape($word){
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

function get_post($key){
    if(isset($_POST[$key])){
        $var = trim($_POST[$key]);
        return $var;
    }
}

function check_words($word, $length){
    if(mb_strlen($word) === 0){
        return FALSE;
    }elseif(mb_strlen($word) > $length){
        return FALSE;
    }else{
        return TRUE;
    }
}

function get_db_Connect(){
    try{
        $dsn = "mysql:host=db; dbname=sample";
        $user = 'user';
        $password ='userpass';


        $dbh = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        print($e->getMessage());
        die();
    }
    $dbh->(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
function insert_comment($dbh,$name,$comment){

    $date = date('Y-m-d  H:i:s');
    $sql = "INSERT INTO board (name,comment, created) VALUE(:name, :comment,'{$date}')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name',$name, PDO::PARAM_STR);
    $stmt->bindValue(':comment',$comment, PDO::PARAM_STR);
    if(!$stmt->execute()){
        return 'データの書き込みに失敗しました';
    }

}
?>