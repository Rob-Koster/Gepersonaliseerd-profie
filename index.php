<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mijn website</title>
    <script>
        function validateForm() {
            // Get all input fields
            var voornaam = document.getElementById('voornaam').value;
            var achternaam = document.getElementById('achternaam').value;
            var geboortedatum = document.getElementById('geboortedatum').value;
            var hobby = document.getElementById('hobby').value;
            var middelbare = document.getElementById('middelbare').value;
            var vervolg = document.getElementById('vervolg').value;

            // Error message container
            var errorMessage = document.getElementById('error-message');
            errorMessage.innerHTML = "";

            // Check if any field is empty
            if (!voornaam || !achternaam || !geboortedatum || !hobby || !middelbare || !vervolg) {
                errorMessage.innerHTML = "Vul alle velden in!";
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

<h1>CV Generator</h1>



<form class="form" action="profiel.php" method="post" onsubmit="return validateForm()">
    <label for="voornaam">Voornaam:</label><br>
    <input type="text" name="voornaam" id="voornaam"><br>

    <label for="achternaam">Achternaam:</label><br>
    <input type="text" name="achternaam" id="achternaam"><br>

    <label for="geboortedatum">Geboortedatum:</label><br>
    <input type="date" name="geboortedatum" id="geboortedatum"><br>

    <label for="hobby">Hobby's:</label><br>
    <input type="text" name="hobby" id="hobby"><br>

    <label for="middelbare">Naam van (middelbare) school:</label><br>
    <input type="text" name="middelbare" id="middelbare"><br>

    <label for="vervolg">Naam van vervolgopleiding:</label><br>
    <input type="text" name="vervolg" id="vervolg"><br>
    
    <input class="button" type="submit" value="Verzenden">
</form> 

<div id="error-message"></div>

</body>
</html>
