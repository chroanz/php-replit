<?php

$cases = intval(fgets(STDIN));

while ($cases--) {
    $string = trim(fgets(STDIN));
    $string = strrev($string);

    for ($i = 0; $i < strlen($string); $i++) {
      if($i < floor(strlen($string) / 2)){
        if (ctype_alpha($string[$i])) {
            $string[$i] = chr(ord($string[$i]) + 3);
        }
      }
      else {
        if (ctype_alpha($string[$i])) {
            $string[$i] = chr(ord($string[$i]) + 2);
        }
        else {
          $string[$i] = chr(ord($string[$i]) - 1);
        }
      }
    }
    echo $string . PHP_EOL;
}
