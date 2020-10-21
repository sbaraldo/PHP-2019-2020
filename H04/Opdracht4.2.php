<?php

for ($i = -10; $i <= 30; $i++)
    if (checkdeelbaar($i)) {
        echo "{$i} is deelbaar door 3<br>";
    } else {
        echo "{$i} is NIET deelbaar door 3<br>";
    }

function checkdeelbaar($getal) {
    if ($getal % 3 === 0) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;

}