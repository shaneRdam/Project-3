<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table exists
$table_check = "SHOW TABLES LIKE 'accounts'";

if($conn->query($table_check)->num_rows == 0) {
    // Create table
    $sql = "CREATE TABLE accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email TEXT NOT NULL,
    password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
} else {
    echo "Table already exists";
}

// Reset auto-increment value
$sql = "ALTER TABLE accounts AUTO_INCREMENT = 2";

if ($conn->query($sql) === TRUE) {
    echo "Auto-increment value reset successfully";
} else {
    echo "Error resetting auto-increment value: " . $conn->error;
}

// Assign $_POST values to variables
if (isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password'])) {
$uname = $_POST["uname"];
$email = $_POST["email"];
$password = $_POST["password"];
}

// Insert data into table
$sql = "INSERT INTO accounts (username ,email, password)
VALUES ('$uname','$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<style>
    table, tr ,td {
        border: solid 1px black
    }
</style>

<?php
  // Redirect to the product page
  echo "<script>window.location.href = '/Project-3/Account/Account.php';</script>";
?>
