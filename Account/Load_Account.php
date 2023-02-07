<?php
echo "Vandaag is " . date("Y/m/d") . "<br><br>";

$Username = $_POST["uname"];
echo "Email: ".$Username . "<br>";

if(strlen($Username) < 5) {
    echo "FOUT de naam is te kort <br><br>";
}

$Password = $_POST["password"];
echo "Password: ".$Password . "<br>";

$colors = array("red", "green", "blue", "yellow");

echo "<table>";
foreach ($colors as $value) {
    echo "<tr><td>$value</td> </tr><br>";
  }
echo "</table>";
?>  

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

    echo "<table>";
    foreach($result as $row) {
        echo "<tr>" . 
        "<td>".$row['ID']."</td>" . 
        "<td>" .$row['Email']."<td>" . 
        "<td>".$row['Password']."<td>" . "</tr><br>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>


<style>
    table, tr ,td {
        border: solid 1px black
    }
</style>