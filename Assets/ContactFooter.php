<html>
    <head>
        <link rel="stylesheet" href="/Project-3/Stylesheet.css">
        <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <footer class="ContactFooter">
        <section class="ContactSectionWhite">
            <h1>
                Staat het antwoord op u vraag er niet tussen?
            </h1>
            <button class="OrangeButton" onclick="window.location.href='/Project-3/Contact/Contact.php'">Neem contact op</button>
        </section>
        <section class="ContactSectionOrange">
        <p onclick="location.href='/Project-3/Index.php'">
        Terug naar home pagina
    </p>
    <p onclick="ScrollTop()">
        Scroll naar de top
    </p>
        </section>
    </footer>

    <style>
.ContactFooter {
    width: 100%;
    min-height: 30vw;
    text-align: center;
    text-decoration: none;
}

.ContactSectionWhite {
    width: 100%;
    min-height: 10vw;
    text-align: center;
    background-color: rgb(240, 240, 240);
    padding: 4vw 0;
}

.ContactSectionWhite h1 {
    font-size: 2vw;
}

.ContactSectionOrange {
    width: 100%;
    text-align: center;
    background-color: rgb(239, 170, 43);
    padding: 4vw 0;
    color: white;
}

.ContactSectionOrange p:hover {
    cursor: pointer;
}
    </style>
    <script>
        function ScrollTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    </body>
</html>