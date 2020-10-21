<?php
    $users = [
       "piet@worldonline.nl" =>  "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Formulier</title>
</head>
<body>

<?php if (!isset($_POST['knop'])) { ?>

<!-- FORMULIER -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Naam: <input type="text" name="mailadres" placeholder="mailadres"><br>
    Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
    <input type="submit" name="knop" value="VERSTUUR">
</form>

    <?php
} else {
    // input valideren ( bestaan de variabelen en zijn ze niet leeg)
    if (!isset($_POST ['mailadres']) OR empty($_POST ['mailadres'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    if (!isset($_POST ['wachtwoord']) OR empty($_POST ['wachtwoord'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    // mailadres en wachtwoord opslaan in lokale variabelen
    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];

    //loopen door een associatieve array met geldige inloggegevens
    foreach ($users as $key => $value) {
        if ($key == $mailadres AND $value == $wachtwoord) {
            //als we een match zien we "Welkom"
            exit("Welkom!");
        }
    }

    //en anders zien we "Sorry! Geen toegang"
    exit("Sorry! Geen toegang!");

}

?>

</body>
</html>