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
<?php include '../Assets/Navigatie.php';?>
<div class="Maintext">
<?php
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
 
        if(in_array($_POST['product_id'], array_keys($_SESSION['cart']))){
            $_SESSION['cart'][$_POST['product_id']] += 1;
            header("location: ./");
        }else{
            // Create new session variable
            $_SESSION['cart'][$_POST['product_id']] = 1;
            // print_r($_SESSION['cart']);
            header("location: ./");
        }
 
    }else{
        // Create new session variable
        $_SESSION['cart'][$_POST['product_id']] = 1;
        // print_r($_SESSION['cart']);
        header("location: ./");
    }
}
?>


        </div>


        <?php include '../Assets/Footer.php';?>
</body>
</html>