<?php

$leds = [
    0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
    5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
];

$n = intval(fgets(STDIN));

while ($n--) {
    $number = trim(fgets(STDIN));
    $total = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        $total += $leds[$number[$i]];
    }
    echo $total . " leds\n";
}
