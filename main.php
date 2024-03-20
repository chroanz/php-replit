<?php

$n = intval(fgets(STDIN));
$pares = [];
$impares = [];

while ($n--) {
    $numero = intval(fgets(STDIN));
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

sort($pares);
rsort($impares);

foreach ($pares as $par) {
    echo $par . "\n";
}

foreach ($impares as $impar) {
    echo $impar . "\n";
}
