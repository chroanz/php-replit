<?php
$x = fgets(STDIN);
$y = fgets(STDIN);
$sum = 0;

$menor = min($x, $y);
$maior = max($x, $y);

for($i = $menor + 1; $i < $maior; $i++){
  if($i % 2 != 0){
    $sum = $i + $sum;
  }
}

print $sum . PHP_EOL;

?>
