<!DOCTYPE html>
<html lang="en">
<head>
    <title> PHP opdracht</title>
    <style>
        body {
            text-align: center;
        }
        .rood {
            border: red solid 5px;
        }
        .groen {
            border: green solid 5px;
        }

    </style>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++) {
    if ($i % 2 == 0) { //met modelus operator weet je of het een even getal is
        $class = "class = 'rood'";
    } else {
        $class = "class = 'groen'";
    }
    echo "<img ".$class." src='../img/ghoul".$i.".jpg'>";
}
?>