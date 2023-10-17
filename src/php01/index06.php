<?php
function triangle($ground,$height){
  return $ground*$height/2;
}

function square($vertical,$horizon){
  return $vertical*$horizon/2;
}

function base($up,$down,$high){
  return ($up+$down)*$high/2;
}

echo "三角形の面積は".triangle(10,10) . "<br>";
echo "四角形の面積は" .square(5,10) .  "<br>";
echo "台形の面積は" .base(10,10,10) .  "<br>";
