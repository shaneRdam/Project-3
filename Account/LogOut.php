<?php 
  session_start();
  unset($_SESSION['account_id']);
  session_destroy();

  header('Location: /Project-3/Account/Login.php');
?>