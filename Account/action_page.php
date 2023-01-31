<?php
echo "<p>Hello world</p><br>";

$Username = $_POST["uname"];
echo $Username . "<br>";

if(strlen($Username) < 5) {
    echo "FOUT de naam is te kort <br><br>";
}

$Password = $_POST["password"];
echo $Password . "<br>";
?>