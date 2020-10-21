<!DOCTYPE html>
<html>
<head>
    <title>PHP opdracht kerstboom</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i <=9; $i++) {
    for ($j = 0; $j <$i; $j++) {
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>