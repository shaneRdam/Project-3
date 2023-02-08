<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM accounts"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    $Account_ID = [];
    $Account_Email = [];
    $Account_Password = [];

    echo "<table><td>";
    foreach($result as $row) {
        array_push($Account_ID, $row['ID']);
        array_push($Account_Email, $row['Email']);
        array_push($Account_Password, $row['Password']);
        
        echo "<br>";
    }
    var_dump($Account_ID);
    echo "<br>";
    var_dump($Account_Email);
    echo "<br>";
    var_dump($Account_Password);
        echo "<br>";

    echo "</td></table>";
    echo "<br><br><br>";


} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM producten"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    $Product_ID = [];
    

    echo "<table><td>";
    foreach($result as $row) {
        $Product_ID = [$row['ID']];
        var_dump($Product_ID);
        echo "<br>";

        $Product_Soort = [$row['Soort']];
        var_dump($Product_Soort);
        echo "<br>";

        $Product_Naam = [$row['Naam']];
        var_dump($Product_Naam);
        echo "<br>";

        $Product_Foto = [$row['Foto']];
        var_dump($Product_Foto);
        echo "<br>";

        $Product_Prijs = [$row['Prijs']];
        var_dump($Product_Prijs);
        echo "<br>";

        $Product_Aantal = [$row['Aantal']];
        var_dump($Product_Aantal);
        echo "<br>";

        $Product_Beschrijving = [$row['Beschrijving']];
        var_dump($Product_Beschrijving);
        echo "<br>";

        echo "<br>";
    }
    echo "</td></table>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<style>
    table, tr ,td {
        border: solid 1px black;
    }
</style>