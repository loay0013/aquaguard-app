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
        <div class="d-flex gap-3 flex-column mt-4">
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/Icon%20awesome-users-cog.svg">
                <p class="text-dark ms-4">Kontooplysninger </p>
            </a>
            </div>
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/Icon%20ionic-ios-notifications.svg">
                <p class="text-dark ms-4">Notifikationer</p>
            </a>
            </div>
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/info-square-fill.svg">
                <p class="text-dark ms-4">Vejledninger</p>
            </a>
            </div>
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/moon-stars-fill.svg">
                <p class="text-dark ms-4">Dark-mode</p>
            </a>
            </div>
        </div>


        <div class="d-flex justify-content-center mt-7">
            <a class="bg-dark rounded-3 d-flex flex-row w-95 p-3 justify-content-center">
                <p class="text-light ">Log ud</p>
            </a>

        </div>

    </div>


</section>

<?php include "includes/nav.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
