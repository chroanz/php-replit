<?php

$cases = intval(fgets(STDIN));

while ($cases--) {
    $string = trim(fgets(STDIN));
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        if (ctype_alpha($string[$i])) {
            $string[$i] = chr(ord($string[$i]) + 3);
        }
    }

    $string = strrev($string);

    $half_length = $length / 2;
    for ($i = $half_length; $i < $length; $i++) {
        $string[$i] = chr(ord($string[$i]) - 1);
    }

    echo $string . PHP_EOL;
}
