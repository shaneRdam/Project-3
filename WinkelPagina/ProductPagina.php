<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>Document</title>
</head>
<body>
<?php require '/Xampp/htdocs/Project-3/DatabasePuller.php'; ?>
<?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>
<?php 
    $CurrentID = 4;
echo "
    <script>
  var urlParams = new URLSearchParams(window.location.search);
  var id = urlParams.get('id');
  console.log(id);

  var xhr = new XMLHttpRequest();
  xhr.open('GET', '?id=' + id, true);
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
    }
  };
  xhr.send();
</script>
    ";
    if (isset($_GET['id'])) {
        $CurrentID = $_GET['id'];
      }

      function GetHref($Naam) {
        switch ($Naam) {
          case "Fles";
           echo "Flessen/Flessen.php";
           break;
          case "Pods";
           echo "Pods/Pods.php";
           break;
          case "Accessoires";
           echo "Accessories/Accessories.php";
           break;
        }
      }
?>


<div class="Maintext">
  <a href="/Project-3/Index.php">< Home</a>
  <a href="/Project-3/WinkelPagina/<?php echo GetHref($Product_Soort[$CurrentID]); ?>">< <?php echo $Product_Soort[$CurrentID] ?> </a>
  <a> < <?php echo $Product_Naam[$CurrentID] ?> </a>
<div class="ProductPaginaFlex">
    <div>
    <img class="ProductPaginaImg" src="<?php echo $Product_Foto[$CurrentID] ?>">
    </div>
    <div>
    <h1 class="ProductPaginaNaam"><br>
    <?php echo $Product_Naam[$CurrentID] ?>
    </h1>
    <h1><?php echo SterrenBerekenen() ?></h1>
    <h2>

    </h2>

    <h2>
    <?php echo "€" . $Product_Prijs[$CurrentID] ?>
    <br>
    <?php echo "Aantal: " . $Product_Aantal[$CurrentID] ?>
    </h2>
    <p>
    <?php echo $Product_Beschrijving[$CurrentID] ?>
    </p>
    </div>
</div>
<?php include '/Xampp/htdocs/Project-3/Assets/ReviewTabel.php' ?>
<?php 
    function SterrenBerekenen() {
      $TotalSterren = 0;
      $Sterrenteller = 0;
      global $Reviews_Sterren;
      global $Reviews_ID;
      global $Reviews_Product_ID;
      global $CurrentID;
      for ($i = 0 ; $i < count($Reviews_ID);) { 
        $i++;
        if($Reviews_Product_ID[$i] == $CurrentID) {
          $TotalSterren = $TotalSterren + $Reviews_Sterren[$i];
          $Sterrenteller++;
        }
        if($TotalSterren != 0 ) {
        $Gem = floatval($TotalSterren) / $Sterrenteller;
        return floatval($Gem)." Sterren";
      }
      else {
        return "";
      }
    }
    }
    ?>

        </div>


        <?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>