<!DOCTYPE html>
<html lang="en">
<head>
    <title> PHP opdracht for loop</title>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++) {
    echo "<img src='../img/ghoul".$i.".jpg'>";
}
?>
<?php
$ghouls = array("ghoul1.jpg", "ghoul4.jpg", "ghoul9.jpg");

foreach($ghouls as $ghoul) {
    echo "<img src= '../img/".$ghoul."'>";
}
?>
</body>
</html>