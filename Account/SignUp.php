<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
  <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
  </head>
<body>
<?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>
<div class="MaintextAccount">

<br><br><br>

<form action="Create_Account.php" method="post">
  <label for="fname">Email:</label><br>
  <input type="email" id="fname" class="InputCapslock" name="email" placeholder="Firstname.Lastname@email.com" value=""><br><br>
  <label for="fname">Username:</label><br>
  <input type="text" id="fname" class="InputCapslock" name="uname" placeholder="Gebruikersnaam" value=""><br><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password" placeholder="Password" value="">
  <br>
  <label for="lname">Confirm password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password2" placeholder="Password" value="">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input class="AccountSubmit" type="submit" value="Submit">
</form> 
<p id="TextCapsLock">Warning: Caps lock is on!</p>
<br><br>

<a href="/Project-3/Account/LogIn.php" class="create-account">Terug naar login</a>
</div>

<script src="../Account/App.js"></script>
<?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>