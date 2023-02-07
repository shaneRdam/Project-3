<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    </head>
    <body>
    <header>
        <h1>Pods up</h1>
        <div class="HeaderDiv">
            <a href="/Project-3/Account/LogIn.php"><i class="fa fa-user-circle Fa-Icon" style="font-size:2.5vw"></i></a>
            <a href="/Project-3/WinkelPagina/WinkelWagen.php"><li class="fa fa-shopping-cart Fa-Icon" style="font-size:2.5vw"></li></a>
        </div>
    </header>
<nav>
        <a href="/Project-3/Index.php">Home</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Flessen/Flessen.php">Flessen</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Pods/Pods.php">Pods</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Accessories/Accessories.php">Accessories</a>
    </nav>
    </body>

    <style>
        header {
    background-color: white;
}

nav {
    background-color: rgb(218, 218, 218);
    border-radius: 25vh;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    margin: 0 30vw;
    height: 7vh;
    z-index: 1;
}

nav a {
    color: grey;
    text-decoration: none;
}

nav a:hover {
    color: red;
}

.HeaderDiv {
    float: right;
}
    </style>

</html>