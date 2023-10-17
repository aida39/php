<?php

require_once("config/status_codes.php");

$random_numbers= array_rand($status_codes,4);
// $status_codesのキー０～１０の中から、４つランダムにキーを取り出し、$random_numbers（配列）に移す
foreach ($random_numbers as $index) {
// 4つのキーの入っている$random_numbers（配列）から、キーを$index（変数）に移す
    $options[]= $status_codes[$index];
// $status_codesの中の指定された４つの配列を$optionsに移す（処理を４回繰り返す、４つの配列を全て移す）
}
$question = $options[mt_rand(0,3)];
// mt_rand(0,3)→0から3の間で乱数を生成（最小値,最大値）[array_rand($options, 1)]でもOK
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a href="#" class="header-logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>
        </div>
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <div class="quiz-form__item">
                <?php foreach ($options as $option):?>
                <div class="quiz-form__group">
                    <input type="radio" class="quiz-form__radio" id="<?php echo $option['code'] ?>" name="option" value="<?php echo $option['code'] ?>">
                    <label for="<?php echo $option['code'] ?>" class="quiz-form__label">
                        <?php echo $option['code'] ?>
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">回答</button>
            </div>
        </form>
    </main>
</body>
</html>