<?php
$testCases = intval(fgets(STDIN));
while ($testCases--) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    echo $a . "\n";
}