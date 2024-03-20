<?php

$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$cases = intval(fgets(STDIN));

while ($cases--) {
    $text = rtrim(fgets(STDIN));
    $shift = intval(fgets(STDIN));
    $encryptedText = '';
    foreach (str_split($text) as $char) {
        if (ctype_alpha($char)) {
            $index = strpos($alphabet, strtoupper($char));
            $shiftedIndex = ($index - $shift + 26) % 26;
            $shiftedChar = $alphabet[$shiftedIndex];
            $encryptedText .= ctype_upper($char) ? $shiftedChar : strtolower($shiftedChar);
        } else {
            $encryptedText .= $char;
        }
    }
    echo $encryptedText . "\n";
}
