<?php
session_start();
if (isset($_SESSION['account_id'])) {
  $CurrentAccount_ID = (int)$_SESSION['account_id'] ;
} else {
  // Redirect to the login page if the account ID is not set
  header('Location: /Project-3/Account/Login.php');
  exit;
}
  ?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
  </head>

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

// function PHPUitloggen() {
//   // unset($_SESSION['account_id']);
//   // session_destroy();

//   echo "<script>window.location.href = '/Project-3/Account/Account.php';</script>";
//   header('Location: /Project-3/Account/Login.php');
// }
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
          <button class="tablinks" onclick="openCity(event, 'Settings')">Settings</button>

          <?php
          if($Account_ID[$CurrentAccount_ID] == 1) {
            // echo "<button class='tablinks' onclick='openCity(event, 'AdminTools') '>AdminTools</button>";
            include '/Xampp/htdocs/Project-3/Assets/AdminTools.php';
          }
          ?>
          
          <button class="tablinks" onclick="location.href='/Project-3/Account/LogOut.php'">Uitloggen</button>
        </div>

        <div id="Account" class="tabcontent">
          <h1>Welkom terug <?php echo $Account_Username[$CurrentAccount_ID] ?>!</h1>
          <p>(text over account)</p>
          <br>

          <h3>Laastse bestellingen</h3>
          <!-- php code om de laaste 3 bestellingen van het account laten zien -->
        </div>

        <div id="Overzicht" class="tabcontent">
          <h1>Overzicht</h1>
        </div>

        <div id="Reviews" class="tabcontent">
          <h1>Reviews</h1>
          <div>
            <h1>Laaste reviews</h1>
            <div class="ReviewTabelFlex">
    <?php
    for ($i = 0 ; $i < count($Reviews_ID); $i++) { 
        if($Reviews_Account_ID[$i] == $CurrentAccount_ID ) {
          $Product = $Product_ID[$i];
            echo 
            "
            <div class='ReviewTabelElement'>
            Deze review is gemaakt op $Reviews_Datum[$i]<br>
            Op dit product: <strong>$Product_Naam[$Product]</strong>
            <br>
            <div>
                <h1>$Reviews_Naam[$i]</h1><h3>$Reviews_Email[$i]</h3>
                <br><h3>$Reviews_Sterren[$i] Sterren</h3>
                <p>
                $Reviews_Beschrijving[$i]
                </p>
        </div>
        </div>
        <br>
            ";
        }
    }
    ?>
    </div>
    </div>
        </div>

        <div id="Settings" class="tabcontent">
          <h1>Settings</h1>
          <!-- <p></p> -->
        </div>
        
        <?php
          if($Account_ID[$CurrentAccount_ID] == 1) {
            echo "
            <div id='AdminTools' class='tabcontent'>
            <h1>AdminTools</h1>
            <!-- <p></p> -->
          </div>
            ";
          }
          ?>
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
    tablinks[i].className = tablinks[i].className.replace(" active2", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Name).style.display = "block"
  document.getElementById(Name).className += " active2";
  evt.currentTarget.className += " active";
}
openCity(event, 'Account');

</script>
<style>
  /* Account reviews */
.ReviewTabelFlex {
  display: flex;
  flex-direction: column-reverse;
}
      
.ReviewTabelElement {
  background-color: #fcfcfc;
  border: solid 0.1vw black;
  display: flex;
  flex-direction: column;
  border-radius: 1vw;
  padding: 2vw;
  min-width: 10vw;
  width: 30vw;
  float: left;
}

.ReviewTabelElement div, .ReviewTabelElement div p {
  padding: 1vw;
}

.ReviewTabelElement h1 {
  font-size: 1.5vw;
}

.ReviewTabelElement p {
  border: black dotted 0.2vw;
}
</style>
</html>