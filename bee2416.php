<?php
$entrada = explode(" ", fgets(STDIN));
$c = $entrada[0];
$n = $entrada[1];
echo ($c % $n) . PHP_EOL;
?>