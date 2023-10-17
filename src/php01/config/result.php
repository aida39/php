<?php
$name =htmlspecialchars($_POST["name"], ENT_QUOTES);
$menu =htmlspecialchars($_POST["menu"], ENT_QUOTES);
$number =htmlspecialchars($_POST["number"], ENT_QUOTES);


echo "お名前は、". "$name" . "<br>";
echo "ご希望の商品は、". "$menu" . "<br>";
echo "注文数は、". "$number" . "<br>";