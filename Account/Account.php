<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
  </head>
  <?php 
  $CurrentAccount_ID = 0
  ?>
  <?php
function GetPic() {
  global $Account_Foto;
  global $CurrentAccount_ID;
  if(strlen($Account_Foto[$CurrentAccount_ID]) > 0) {
    return $Account_Foto;
  }
  else {
    return "/Project-3/Assets/Video_Assets/Image/AccountDefaultProfilePic.png";
  }
}
?>
  <body>
  <?php require '/Xampp/htdocs/Project-3/DatabasePuller.php'; ?>
    <?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>

    <div>
      <div class="AccountOverzicht">
        <div class="tab">
          <img src="<?php echo GetPic() ?>" alt="Account foto">
          <button class="tablinks active" onclick="openCity(event, 'Account')">Account</button>
          <button class="tablinks" onclick="openCity(event, 'Overzicht')">Overzicht</button>
          <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
          <button class="tablinks">Uitloggen</button>
        </div>

        <div id="Account" class="tabcontent">
          <h1>Welkom terug (gebruiksnaam van account)</h1>
          <p>(text over account)</p>
          <br>

          <h3>Laastse bestellingen</h3>
          <!-- php code om de laaste 3 bestellingen van het account laten zien -->
        </div>

        <div id="Overzicht" class="tabcontent">
          <h1>Overzicht</h1>
          <!-- <p></p> -->
        </div>

        <div id="Reviews" class="tabcontent">
          <h1>Reviews</h1>
          <!-- <p></p> -->
        </div>
      </div>
    </div>

    <script src="../Account/App.js"></script>
    <?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>


</body>
<script>
    function openCity(evt, Name) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Name).style.display = "block"
  document.getElementById(Name).className += " active2";
  evt.currentTarget.className += " active";
}
openCity(event, 'Account');
</script>
</html>