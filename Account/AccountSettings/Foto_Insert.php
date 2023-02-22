<?php
session_start();

if (isset($_SESSION['account_id'])) {
  $CurrentAccount_ID = (int)$_SESSION['account_id'] ;
} else {
  // Redirect to the login page if the account ID is not set
  header('Location: /Project-3/Account/Login.php');
  exit;
}

if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
  // Check if the file is a valid image
  $info = getimagesize($_FILES['photo']['tmp_name']);
  if ($info === false) {
    die("Invalid file: " . $_FILES['photo']['name']);
  }

  // Save the image to the database
  $imgData = file_get_contents($_FILES['photo']['tmp_name']);
  $imgType = $info['mime'];
  $foto = $_POST['file'];

  $stmt = $db->prepare("UPDATE accounts SET Foto=? WHERE ID=?");
  $stmt->bind_param("si", $imgData, $CurrentAccount_ID);  
  $stmt->execute();  
  $stmt->close();
  $db->close();
  
}

// Redirect back to the account page
header('Location: /Project-3/Account/Account.php');
exit;
?>
