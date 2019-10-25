<?php 
//postされてきたデータを取得する
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>
<html>
<head>
<meta charset="UTF-8">
<body>
    <h1>登録ページ</h1>
    <!-- HTMLの中にechoプログラムを埋め込みましょう -->
    <p>あなたの名前は<?php echo $user_name; ?>さんです。</p>
    <p>趣味は<?php echo $hobby; ?>です。</p>
    <p>登録完了いたしました</p>

</body>
</head>
</html>