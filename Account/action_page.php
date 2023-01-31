<?php
echo "<p>Hello world</p><br>";

$Username = $_POST["uname"];
echo $Username;

if(strlen($Username) < 5) {
    echo "FOUT de naam is te kort";
}

$Password = $_POST["password"];
echo $Password;
?>