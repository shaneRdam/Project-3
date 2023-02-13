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

    //Account array maken
    $Account_ID = [];
    $Account_Email = [];
    $Account_Password = [];

    foreach($result as $row) { //Database info toevoegen aan alle Arrays
        array_push($Account_ID, $row['ID']);
        array_push($Account_Email, $row['Email']);
        array_push($Account_Password, $row['Password']);
        
    }
    /*
    var_dump($Account_ID);
    echo "<br>";
    var_dump($Account_Email);
    echo "<br>";
    var_dump($Account_Password);
        echo "<br>";
*/


} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM producten"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    //Product array maken
    $Product_ID = [];
    $Product_Soort = [];
    $Product_Naam = [];
    $Product_Foto = [];
    $Product_Prijs = [];
    $Product_Aantal = [];
    $Product_Beschrijving = [];

    foreach($result as $row) { //Database info toevoegen aan alle Arrays
        array_push($Product_ID, $row['ID']);
        array_push($Product_Soort, $row['Soort']);
        array_push($Product_Naam, $row['Naam']);
        array_push($Product_Foto, $row['Foto']);
        array_push($Product_Prijs, $row['Prijs']);
        array_push($Product_Aantal, $row['Aantal']);
        array_push($Product_Beschrijving, $row['Beschrijving']);

    }
    /*
    var_dump($Product_ID);
    echo "<br>";
    var_dump($Product_Soort);
    echo "<br>";
    var_dump($Product_Naam);
    echo "<br>";
    var_dump($Product_Foto);
    echo "<br>";
    var_dump($Product_Prijs);
    echo "<br>";
    var_dump($Product_Aantal);
    echo "<br>";
    var_dump($Product_Beschrijving);
    echo "<br>";
*/

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

    /*
let Account_ID = [];
let Account_Email = [];
let Account_Password = [];

    Account_ID = <?php echo json_encode($Account_ID); ?>;
    Account_Email = <?php echo json_encode($Account_Email); ?>;
    Account_Password = <?php echo json_encode($Account_Password); ?>;

    console.log(Account_ID)
    /*
    Account_ID.push('<?php echo json_encode($Account_ID); ?>')
    Account_Email.push('<?php echo json_encode($Account_Email); ?>');
    Account_Password.push('<?php echo json_encode($Account_Password); ?>')
    */

    ?>


    <?php 
    //Alle extra functies
    function GetRandomID($Naam) {
        $ID = Count($Naam) -1;
        return $ID;
    }

    function GetProductByID($ID, $Soort) {
        return $Soort[$ID];
    }

    ?>