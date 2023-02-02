<?php
echo "Vandaag is " . date("Y/m/d") . "<br><br>";

$Username = $_POST["uname"];
echo "Email: ".$Username . "<br>";

if(strlen($Username) < 5) {
    echo "FOUT de naam is te kort <br><br>";
}

$Password = $_POST["password"];
echo "Password: ".$Password . "<br>";
?>