<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>oversigt</title>

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
    <div class="d-flex justify-content-end p-3">
        <img src="images/kl-icon.svg">
    </div>

    <div class="d-flex justify-content-center mt-5">
        <img src="images/vand-icon.svg">
    </div>

    <div class="d-flex flex-row justify-content-center mt-3">
        <img class="me-4" src="images/arrow-left-square-fill.svg">
        <p>5. december 2022</p>
        <img class="ms-4" src="images/arrow-r-square-fill.svg">
    </div>

    <div class="d-flex align-items-center flex-column mt-3">
            <div class="bg-light rounded-3 d-flex flex-column w-95 p-3">
            <div class="d-flex flex-column ">
            <p class="ms-5">Vandhane i køkkenet</p>
            </div>
            <div class="d-flex flex-row gap-3">
            <img src="images/faucet_bathroom.svg">
                <div class="bg-pr w-100 rounded-5 ">
                    <div class="percentage1 rounded-5">
                        <p class="text-light text-center pt-1">45%</p>
                    </div>
                </div>
            </div>
            <div class="mt-2 ms-5">
                <p class="text-oversigt">47,25L af 105L</p></div>
            </div>
    </div>

    <div class="d-flex align-items-center flex-column mt-3">
        <div class="bg-light rounded-3 d-flex flex-column w-95 p-3" >
            <div class="d-flex flex-column ">
                <p class="ms-5">Vandhane på badeværelset</p>
            </div>
            <div class="d-flex flex-row gap-3">
                <img src="images/faucet_bathroom.svg">
                <div class="bg-pr w-100 rounded-5 ">
                    <div class="percentage2 rounded-5">
                        <p class="text-light text-center pt-1">30%</p>
                    </div>
                </div>
            </div>
            <div class="mt-2 ms-5">
                <p class="text-oversigt">31,5L af 105L</p>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center flex-column mt-3">
        <div class="bg-light rounded-3 d-flex flex-column w-95 p-3">
            <div class="d-flex flex-column " >
                <p class="ms-5">Bruser</p>
            </div>
            <div class="d-flex flex-row gap-3">
                <img src="images/faucet_bathroom.svg">
                <div  class="bg-pr w-100 rounded-5 ">
                <div class="percentage3 rounded-5">
                    <p class="text-light text-center pt-1">25%</p>
                </div>
                </div>
            </div>
            <div class="mt-2 ms-5">
                <p class="text-oversigt">26,25L af 105L</p>
            </div>
        </div>
    </div>


</section>

<?php include "includes/nav.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>





</body>
</html>
