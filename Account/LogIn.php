<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
  </head>
<body>
<?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>
<div class="Maintext">

<br><br><br>

<form action="Load_Account.php" method="post">
  <label for="fname">Username:</label><br>
  <input type="email" id="fname" class="InputCapslock" name="uname" placeholder="Firstname.Lastname@email.com" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password" placeholder="Password" value="Doe">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input type="submit" value="Submit">
</form> 
<p id="TextCapsLock">Warning: Caps lock is on!</p>
<br><br>
<a href="/Project-3/Account/SignUp.php">Create account</a>
</div>
<a href="/Project-3/DatabasePuller.php">All database</a>

<script src="../Account/App.js"></script>
<?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>