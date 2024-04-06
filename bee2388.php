<?php

$cases = intval(fgets(STDIN));
$soma = 0;
while ($cases--) {
  $calculo = explode(" ", fgets(STDIN));
  $intervalo = $calculo[0] * $calculo[1];
  $soma += $intervalo;
}

echo $soma;
