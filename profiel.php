<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mijn website</title>
</head>
<body>

<?php
// Turn debug on or off
$debug = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gets the values ​​and check if they exist
    $voornaam = !empty($_POST["voornaam"]) ? htmlspecialchars($_POST["voornaam"]) : 'Niet ingevuld';
    $achternaam = !empty($_POST["achternaam"]) ? htmlspecialchars($_POST["achternaam"]) : 'Niet ingevuld';

    // Changes the formate of date 
    $geboortedatum = !empty($_POST["geboortedatum"]) ? htmlspecialchars($_POST["geboortedatum"]) : 'Niet ingevuld';
    if ($geboortedatum !== 'Niet ingevuld') {
        $date = new DateTime($geboortedatum);
        $geboortedatum = $date->format('d/m/Y');
    }

    $hobby = !empty($_POST["hobby"]) ? htmlspecialchars($_POST["hobby"]) : 'Niet ingevuld';
    $middelbare = !empty($_POST["middelbare"]) ? htmlspecialchars($_POST["middelbare"]) : 'Niet ingevuld';
    $vervolg = !empty($_POST["vervolg"]) ? htmlspecialchars($_POST["vervolg"]) : 'Niet ingevuld';

    echo "<div class='section'>";
    echo "<h1 class='CV'>CV</h1>";
    echo "<h2>Persoonlijke gegevens</h2><br>";
    echo "<span class='label'>Voornaam:</span> " . $voornaam . "<br>";
    echo "<span class='label'>Achternaam:</span> " . $achternaam . "<br>";
    echo "<span class='label'>Geboortedatum:</span> " . $geboortedatum . "<br>"; 

    echo "<h2>Hobby's</h2><br>";
    echo "<span class='label'></span> " . $hobby . "<br>";

    echo "<h2>Onderwijs</h2><br>";
    echo "<span class='label'>(Middelbare) School:</span> " . $middelbare . "<br>";
    echo "<span class='label'>Vervolgopleiding:</span> " . $vervolg . "<br>";
    echo "</div>";
} else {
    echo "<div class='section'>";
    echo "<span class='label'>Geen gegevens ontvangen.</span>";
    echo "</div>";
}


if ($debug == 1) {
    echo "profiel.php is geladen.<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

</body>
</html>