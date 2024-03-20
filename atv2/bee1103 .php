<?php

while(true){
  $entrada = explode(" ", fgets(STDIN));

  $h1 = $entrada[0];
  $m1 = $entrada[1];
  $h2 = $entrada[2];
  $m2 = $entrada[3];

  if($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0){
    break;
  }

  if($h2 < $h1){
    $h2 += 24;
  }

  if($h2 == $h1 && $m2 < $m1){
    $h2 += 24;
  }

  if($m2 < $m1){
    $m2 += 60;
    $h2--;
  }

  $mI = $h1 * 60 + $m1;
  $mF = $h2 * 60 + $m2;

  $resultado = $mF - $mI;

  echo $resultado . PHP_EOL;
}

?>
