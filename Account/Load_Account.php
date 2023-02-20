<?php
session_start();
include '/Xampp/htdocs/Project-3/DatabasePuller.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

if (isset($_POST['email']) && isset($_POST['password'])) {
    // Use the variables from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];
} else if (isset($_GET['email']) && isset($_GET['password'])) {
    // Use the variables from create_account.php
    $email = $_GET['email'];
    $password = $_GET['password'];
} else {
    // No email or password, redirect to the login page
    header('Location: /Project-3/Account/Login.php');
    exit;
}



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM accounts WHERE Email=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if (count($result) == 1) {
        // The email exists in the database, check if the password matches
        $hashed_password = $result[0]['Password'];
        if (password_verify($password, $hashed_password)) {
            // The password matches, redirect the user to the Account page
            $_SESSION['account_id'] = $result[0]['ID'];
            header('Location: /Project-3/Account/Account.php');
            exit;
        }              
    }

    // The email or password is incorrect, redirect the user to the login page with an error message
    header('Location: /Project-3/Account/Login.php?error=1');
    exit;

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

<?php
  // Redirect to the product page
  echo "<script>window.location.href = '/Project-3/Account/Account.php';</script>"; //fix
?>
