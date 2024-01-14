<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォーム</title>
</head>
<body>
    <form method="post" action="form.php">
        <div>氏名</div>
        <input type="text" name="name">
        <div>メールアドレス</div>
        <input type="email" name="mail">
        <div>メッセージ本文</div>
        <textarea name="message"></textarea>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>