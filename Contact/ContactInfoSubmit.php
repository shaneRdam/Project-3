<?php
$naam = $_POST["Naam"];
$email = $_POST["Email"];
$land = $_POST["Land"];
$verkooppunt = $_POST["Verkooppunt"];
$helpen = $_POST["Helpen"]; 
$bestellingsnummer = $_POST["Bestellingsnummer"];
$onderwerp = $_POST["Onderwerp"];
$beschrijving = $_POST["Beschrijving"];

echo "$naam <br>"; 
echo "$email <br>"; 
echo "$land <br>"; 
echo "$verkooppunt <br>"; 
echo "$helpen <br>"; 
echo "$bestellingsnummer <br>"; 
echo "$onderwerp <br>"; 
echo "$beschrijving <br>"; 


function LengthCheck($String) {
    if(strlen($String) <= 0) {
        return false;
    }
    else {
        return true;
    }
}

?>

<style>
    table, tr ,td {
        border: solid 1px black
    }
</style>