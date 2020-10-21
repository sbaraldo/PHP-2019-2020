<?php

$originalString = "Stefan Baraldo";

echo "Original string: {$originalString}<br>";
echo "Reversed string: " . reverseString($originalString). "<br>";

function reverseString($originalString) {
    $stringLength = strlen($originalString);
    $reverseString = "";

    for ($i = $stringLength - 1; $i >= 0; $i--){
        $letter = substr($originalString, $i, 1);
        $reverseString .= $letter;
    }

    return $reverseString;
}