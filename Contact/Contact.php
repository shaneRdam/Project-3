<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>Document</title>
</head>
<body>
<?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>
<div class="Maintext">

<form class="ContactForm">
    <h1>Contact formulier</h1>
    <p>
        Voornaam Achternaam
    </p>
    <input type="text" placeholder="John doe"><br><br>

    <p>
        E-mailadres
    </p>
    <input type="email" placeholder="Jouw email" required><br><br>

    <p>
        Land
    </p>
    <select name="Land" id="Land">
    <option value=""></option>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select><br><br>

  <p>
    Verkooppunt
  </p>
  <select name="Verkooppunt" id="Verkooppunt">
    <option value=""></option>
    <option value="Pods-Up.com">Pods-Up.com</option>
    <option value="Amazon">Amazon</option>
    <option value="Anders">Anders</option>
  </select><br><br>

  <p>
    Hoe kunnen wij je helpen
  </p>
  <select name="Helpen" id="Helpen">
    <option value=""></option>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select><br><br>

  <p>
    Bestellingsnummer
  </p>
    <input type="text" placeholder="#NL-123456"><br><br>

    <p>
        Onderwerp
    </p>
    <input type="text" required><br><br>

    <p>
        Beschrijving
    </p>
    <input type="textarea" required><br><br>

    <p>
        Screenshots (optioneel)
    </p>
    <input type="file" id="img" name="img" accept="image/*"><br><br>

    <input type="submit"> 
</form>

        </div>


        <?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>