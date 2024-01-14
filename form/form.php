<!DOCTYPE html>
<html lang="ja">
<head>
    <h1>PHP</h1>
</head>
<body>
    <pre>
        <?php
        // $buhin = $_POST['buhin'];
        // echo $buhin;

        try {
            $dsn = 'mysql:dbname=form;host=form-mysql;charset=utf8';
            $user = 'user';
            $password = 'password';
            $PDO = new PDO($dsn,$user,$password);
            $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $name =  $_POST['name'];
            $mail =  $_POST['mail'];
            $message =  $_POST['message'];

            $sql = "INSERT INTO tblCustomer(name,mail,message) VALUES(:name, :mail, :message)";
            $stmt = $PDO->prepare($sql);
            $params = array(':name' => $name,':mail' => $mail,':message' => $message);
            $stmt->execute($params);

            echo "<p>名前:" . $name  . "</p>";
            echo "<p>メールアドレス:" . $mail  . "</p>";
            echo "<p>メッセージ:" . $message  . "</p>";
            echo '<p>上記の内容をデータベースへ登録しました。</p>';
        } catch(PDOException $e) {
            echo 'DB接続エラー' . $e->getMessage();
        }
        ?>
    </pre>
</body>
</html>