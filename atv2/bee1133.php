<?php
$x = fgets(STDIN);
$y = fgets(STDIN);

if($x < $y){
  for($i = $x+1; $i < $y; $i++){
    if($i % 5 == 2 || $i % 5 == 3){
      echo "{$i}\n";
    }
  }
}
else{
  for($i = $y+1; $i <= $x; $i++){
    if($i % 5 == 2 || $i % 5 == 3){
      echo "{$i}\n";
    }
  }
}

?>