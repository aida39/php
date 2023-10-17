<?php
require_once( "config/status_codes.php");

$answer_code= htmlspecialchars($_POST["answer_code"], ENT_QUOTES);
$option= htmlspecialchars($_POST["option"], ENT_QUOTES);

if(!$option){
    header("Location: index.php");
    // option 変数が存在しなかった時、つまり、index.phpファイルで解答の選択肢を選ばなかった時,
    // index.php にリダイレクトするようにしている
}

foreach ($status_codes as $status_code) {
    if($status_code["code"] === $answer_code){
        // 正解用の変数を準備する
        // 正解の選択肢（$answer_code）が一覧のコード（$status_code["code"] ）と一致した時、
        // $codeにそのコード（$status_code["code"]）、つまり正解のコード番号を代入する
        // $descriptionには正解の説明内容を代入する
        $code = $status_code["code"];
        $description = $status_code['description'];
    }
    $result = $option === $code;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">

</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a href="#" class="header-logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if($result): ?>
<!-- もし$optionと$codeが一致した場合、（$result = $option === $code） -->
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text"><?php echo $code ?></td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text"><?php echo $description ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>