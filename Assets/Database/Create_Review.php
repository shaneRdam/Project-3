<?php 
  $CurrentID = 4;
  if (isset($_GET['id'])) {
    $CurrentID = $_GET['id'];
  }

  if (isset($_POST['Naam']) && isset($_POST['Email']) && isset($_POST['SterrenRating']) && isset($_POST['Beschrijving'])) {
    $naam = $_POST['Naam'];
    $email = $_POST['Email'];
    $sterrenrating = $_POST['SterrenRating'];
    $beschrijving = $_POST['Beschrijving'];
    $datum = date('Y-m-d H:i:s');
    $productID = $_GET['id'];
  } 

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
  $sql = "SELECT MAX(ID) FROM reviews";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $next_review_id = $row["MAX(ID)"] + 1;
  } else {
    $next_review_id = 1;
  }

  // Get the form data
  $naam = $_POST["Naam"];
  $email = $_POST["Email"];
  $product_id = $CurrentID;
  $sterren = $_POST["SterrenRating"];
  $titel = $_POST["Titel"];
  $datum = date("Y-m-d H:i:s");
  $beschrijving = $_POST["Beschrijving"];

  session_start();
  if (isset($_SESSION['account_id'])) {
    $account_id = (int)$_SESSION['account_id'];
  } 

  // Insert the data into the database
  $sql = "INSERT INTO reviews (ID, Product_ID, Account_ID, Naam, Email, Sterren, ReviewTitel, Datum, Beschrijving)
  VALUES ('$next_review_id', '$product_id', '$account_id', '$naam', '$email', '$sterren', '$titel', '$datum', '$beschrijving')";

  if ($conn->query($sql) === TRUE) {
    echo "Review added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
?>

<?php
  // Redirect to the product page
  echo "<script>window.location.href = '/Project-3/WinkelPagina/ProductPagina.php?id=$product_id';</script>";
?>
