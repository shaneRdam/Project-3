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

  // Send the GET request to the same page
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
?>


<div class="Maintext">
<div class="ProductPaginaFlex">
    <div>
    <img class="ProductPaginaImg" src="<?php echo $Product_Foto[$CurrentID] ?>">
    </div>
    <div>
    <h1 class="ProductPaginaNaam">
    <?php echo $Product_Naam[$CurrentID] ?>
    </h1>
    <h2>

    </h2>

    <h1>
    <?php echo $Product_Prijs[$CurrentID] ?>
    </h1>
    <p>
    <?php echo $Product_Beschrijving[$CurrentID] ?>
    </p>
    </div>
</div>


        </div>


        <?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>