<?php
while(($L = fgets(STDIN)) !== false){
  $V = explode(" ", fgets(STDIN));
  $maior = max($V);
  if($maior >= 20){
    echo "3\n";
  } else if($maior < 10){
    echo "1\n";
  } else {
    echo "2\n";
  }
}

?>
