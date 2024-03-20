<?php
$n = fgets(STDIN);
$count = 1;
$seq = [];

for($i = 0; $i < $n; $i++){
  $seq[$i] = fgets(STDIN);
}

for($j = 1; $j < $n; $j++){
  if($seq[$j] != $seq[$j - 1]){
    $count++;
  }
}

echo "{$count}\n";
?>