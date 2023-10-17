<?php

require_once('index.php');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易掲示板にようこそ！</title>
</head>
<body>
    <h1>簡易掲示板</h1>
    <p>簡単な掲示板を作成しました。気軽にメッセージを投稿してみてください！</p>

    <form action="index.php" name="message" method="POST">
        <label for="message">message:
            <input type="text" id="message">
        </label>
        <input type="submit">
    </form>

    <?php
    echo $message;
    ?>
</body>
</html>