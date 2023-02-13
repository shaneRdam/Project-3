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
    <br>
    <div>
        <a href="/Project-3/Index.php">Home</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Flessen/Flessen.php">Flessen</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Pods/Pods.php">Pods</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Accessories/Accessories.php">Accessories</a>
</div>
<div class="SecondNav">
    <a href="/Project-3/Support/OverOns.php">Over ons</a>
    <div>|</div>
    <a href="/Project-3/Support/VeelgesteldeVragen.php">Hulp</a>
    <div>|</div>
    <a href="/Project-3/Contact/Contact.php">Contact</a>
    <div>|</div>
    <div>
        <form action="/Project-3/WinkelPagina/ZoekProductPagina.php" method="post">
     <input class="NavZoekText" type="text" name="ZoekProductText">
     <input class="NavZoekSubmit" type="submit" value="Zoek">
     </form>
    </div>
    </nav>
    </body>

    <style>
        header {
    background-color: white;
}

nav {
    margin: 0 30vw;
    margin-bottom: 2vw;
    background-color: rgb(218, 218, 218);
    border-radius: 25vh;
    height: 6vh;
    width: 35vw;
    z-index: 2;
    position: absolute;
    transition: 0.7s;
    color: grey;
    font-size: 1vw;
}

nav:hover {
    height: 12vh;
    transition: 0.7s;
}

nav:hover .SecondNav {
    transition: 0.7s;
    opacity: 1;
    height: 9vh;
}

nav:hover .SecondNav div {
    transition: 0.7s;
    opacity: 1;
}

nav div {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
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

.SecondNav {
    z-index: 1;
    transition: 0.7s;
    opacity: 0;
    height: 0vh;
}

.NavZoekSubmit {
    border: none;
    background-color: inherit;
    font-size: 1vw;
    color: grey;
    font-family: Times New Roman;
}

.NavZoekSubmit:hover {
    cursor: pointer
}

.NavZoekText {
    width: 0vw;
    right: 5.8vw;
    z-index: 3;
    position: absolute;
    opacity: 0;
    transition: 0.7s;
}

form:hover .NavZoekText {
    transition: 0.7s;
    right: 5.8vw;
    width: 15vw;
    opacity: 1;
}
    </style>

</html>