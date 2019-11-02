<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1>POSTでデーターを送信する</h1>    
    <p>プロフィールを登録しよう</p>
    <form action="post_receive.php" method="POST">
        <p>名前:<input type="text" name="name"></p>
        <p>性別:<input type="radio" name="sex" value="1">男
        <input type="radio" name="sex" value="2">女
        </p>
        <p>
        血液型: <select name="blood" id="">
            <option value="A">A型</option>
            <option value="B">B型</option>
            <option value="AB">AB型</option>
            <option value="O">O型</option>
        </select>
        </p>
        <p>
            一言: <br>
            <textarea name="comment" id="" cols="30" rows="4"></textarea>
        </p>
        <p><input type="submit" value="送信"></p>
    </form>

    </body>
</html>