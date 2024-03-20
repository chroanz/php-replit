<?php
$valor = intval(fgets(STDIN));

$n100 = floor($valor / 100);
$n50 = floor($valor % 100 / 50);
$n20 = floor($valor % 100 % 50 / 20);
$n10 = floor($valor % 100 % 50 % 20 / 10);
$n5 = floor($valor % 100 % 50 % 20 % 10 / 5);
$n2 = floor($valor % 100 % 50 % 20 % 10 % 5 / 2);
$n1 = floor($valor % 100 % 50 % 20 % 10 % 5 % 2);

echo "{$valor}\n";
echo "{$n100} nota(s) de R$ 100,00\n";
echo "{$n50} nota(s) de R$ 50,00\n";
echo "{$n20} nota(s) de R$ 20,00\n";
echo "{$n10} nota(s) de R$ 10,00\n";
echo "{$n5} nota(s) de R$ 5,00\n";
echo "{$n2} nota(s) de R$ 2,00\n";
echo "{$n1} nota(s) de R$ 1,00\n";

?>