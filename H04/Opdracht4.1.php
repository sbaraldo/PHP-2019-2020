<?php

for ($i = -10; $i <= 40; $i++){
    calculateFahrenheit($i);
}

function CalculateFahrenheit($celcius) {
    $Fahrenheit = $celcius * 1.8 + 32;
    echo "{$celcius} graden Celcius is {$Fahrenheit} graden Fahrenheit.<br>";
}