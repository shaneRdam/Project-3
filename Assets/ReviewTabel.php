<?php require '/Xampp/htdocs/Project-3/DatabasePuller.php'; ?>
<?php 
    $CurrentID = 3;
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
      ?>
    
    <?php
    echo "
    <!-- Review maken -->
    <form action='/Project-3/Assets/Review/Create_Review.php?id=$CurrentID' method='post'>
    <h1>Naam</h1>
    <input type='text' name='Naam'>
    <br>

    <h2>Email</h2>
    <input type='email' name='Email'>
    <h2 value='$CurrentID'></h2>
    <h2 value='date(Y,m,d)'></h2>

    <h2>SterrenRating</h2>
    <input type='radio' value='1' name='SterrenRating'> 1
    <input type='radio' value='2' name='SterrenRating'> 2
    <input type='radio' value='3' name='SterrenRating'> 3
    <input type='radio' value='4' name='SterrenRating'> 4
    <input type='radio' value='5' name='SterrenRating'> 5
    <br>

    <h2>Beschrijving</h2>
    <input type='text' name='Beschrijving'>
    <input type='submit'>
</form>

    <br><br>
";
?>

<div class="ReviewTabelFlex">
    <?php
    for ($i = 0 ; $i < count($Reviews_ID); $i++) { 
        if($Reviews_Product_ID[$i] == $CurrentID) {
            echo 
            "
            <div class='ReviewTabelElement'>
            Deze review is gemaakt op $Reviews_Datum[$i]
            <br>
            <div>
                <h1>$Reviews_Naam[$i]</h1><h3>$Reviews_Email[$i]</h3>
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