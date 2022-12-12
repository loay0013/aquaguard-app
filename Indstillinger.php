<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>indstillinger</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100">
<!-- Her skal sidens indhold ligge -->
<section class="background-welcome h-100">

    <div class="h-100 d-flex flex-column">
        <div>
            <a>
                <img src="images/Icon%20awesome-users-cog.svg">
                <p>Kontooplysninger </p>
            </a>
            <a>
                <img src="images/Icon%20ionic-ios-notifications.svg">
                <p>Notifikationer</p>
            </a>
            <a>
                <img src="images/info-square-fill.svg">
                <p>Vejledninger</p>
            </a>
            <a>
                <img src="images/moon-stars-fill.svg">
                <p>Dark-mode</p>
            </a>
        </div>


        <div>
            <a>
                <p>Log ud</p>
            </a>

        </div>

    </div>


</section>

<?php include "includes/nav.php"; ?>



</body>
</html>
