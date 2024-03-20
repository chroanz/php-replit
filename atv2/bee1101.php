<?php
while(true){
  $nums = explode(" ", trim(fgets(STDIN)));
  $sum = 0;

  if($nums[0] <= 0 || $nums[1] <= 0){
    break;
  }
  if($nums[0] > $nums[1]){
    $maior = $nums[0];
    $menor = $nums[1];
  } 
  else {
    $maior = $nums[1];
    $menor = $nums[0];
  }

  for($i = $menor; $i <= $maior; $i++){
    print $i . " ";
    $sum += $i;
  }
  print "Sum=" . $sum . PHP_EOL;
}

?>