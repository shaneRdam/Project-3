<?php
  if (isset($_POST['Naam']) && isset($_POST['Email']) && isset($_POST["Land"]) && isset($_POST["Verkooppunt"]) && isset($_POST["Helpen"]) && isset($_POST["Bestellingsnummer"]) 
  && isset($_POST["Onderwerp"]) && isset($_POST["Beschrijving"])) {
$naam = $_POST["Naam"];
$email = $_POST["Email"];
$land = $_POST["Land"];
$verkooppunt = $_POST["Verkooppunt"];
$helpen = $_POST["Helpen"]; 
$bestellingsnummer = $_POST["Bestellingsnummer"];
$onderwerp = $_POST["Onderwerp"];
$beschrijving = $_POST["Beschrijving"];
$datum = date("Y-m-d H:i:s");
  }

// echo "$naam <br>"; 

// echo "$email <br>"; 

// echo "$land <br>"; 

// echo "$verkooppunt <br>"; 

// echo "$helpen <br>"; 

// echo "$bestellingsnummer <br>"; 

// echo "$onderwerp <br>"; 

// echo "$beschrijving <br>"; 


function LengthCheck($String) {
    if(strlen($String) <= 0) {
        return false;
    }
    else {
        return true;
    }
}

?>

<?php 
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project-3podsup";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the next review ID
  $sql = "SELECT MAX(ID) FROM contact";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $Contact_id = $row["MAX(ID)"] + 1;
  } else {
    $Contact_id = 1;
  }

  // Insert the data into the database
  $sql = "INSERT INTO contact (ID, Naam, Email, Land, Verkooppunt, Helpen, Bestellingsnummer, Onderwerp, Beschrijving, Datum)
  VALUES ('$Contact_id', '$naam', '$email', '$land', '$verkooppunt', '$helpen', '$bestellingsnummer', '$onderwerp', '$beschrijving', '$datum')";

  if ($conn->query($sql) === TRUE) {
    // echo "Contact added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
?>

<style>
    table, tr ,td {
        border: solid 1px black
    }
</style>

<h1>Bedankt voor u contact, u wordt over 5 seconden naar the homepagina gestuurd</h1>

<?php
  // Redirect to the product page
  echo "
  <script>
  function URL() {
  window.location.href = '/Project-3/Index.php';
  }
  setTimeout(URL, 5000);
  </script>
  ";
?>
