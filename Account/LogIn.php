<!DOCTYPE html>
<html>
<body>
<script src="../Account/App.js"></script>
<h2>HTML Forms</h2>
<?php include '../Assets/Navigatie.php';?>
<div class="Maintext">

<br><br><br>

<form action="action_page.php" method="post">
  <label for="fname">Username:</label><br>
  <input type="email" id="fname" name="uname" placeholder="Firstname.Lastname@email.com" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" name="password" placeholder="Password" value="Doe">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input type="submit" value="Submit">
</form> 
<br><br>

</div>


<?php include '../Assets/Footer.php';?>
</body>
</html>