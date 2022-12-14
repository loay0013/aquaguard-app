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
<section class="background-welcome h-100 p-0 overflow-auto">

    <div class="h-100 d-flex flex-column">
        <div class="d-flex gap-3 flex-column mt-4">
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/Icon%20awesome-users-cog.svg">
                <p class="text-dark ms-4">Kontooplysninger </p>
            </a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="Tilføj%20filter.php" class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                    <img src="images/Wifi%202.svg">
                    <p class="text-dark ms-4">Tilføj filter</p>
                </a>
            </div>
            <div class="d-flex justify-content-center">
            <a class="bg-light rounded-3 d-flex flex-row w-95 p-3">
                <img src="images/Icon%20ionic-ios-notifications.svg">
                <p class="text-dark ms-4">Notifikationer</p>
            </a>
            </div>
            <div class="d-flex justify-content-center">

                <!--Modal 1-->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Velkommen til Aquaguard</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Inden du kan måle dit vandforbrug,
                                skal du forbinde dit Aquaguard-filter
                                til appen.
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button class="btn btn-btn-p d-flex text-light px-5" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Videre</button>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <img src="images/modal-1.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 2-->
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header flex-column border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-title" id="exampleModalToggleLabel2">
                                   <img src="images/Group%20Modal1.svg">
                                </div>
                            </div>
                            <div class="modal-body">
                                <p>
                                    1. Skru dit nuværende filter af vandhanen/
                                    brusehovedet.<br><br>
                                    2. Skru dit filter fra Aquaguard på din
                                    vandhane/bruser.
                                </p>
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button class="btn btn-btn-p text-light" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Tilbage</button>
                                <button class="btn btn-btn-p text-light" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Videre</button>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <img src="images/Modal-2.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 3-->
                <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header flex-column border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-title" id="exampleModalToggleLabel3">
                                    <img src="images/Layer%20Modal%202.svg">
                                </div>
                            </div>
                            <div class="modal-body">
                                1. Tryk på dråbe-ikonet i bunden af
                                appen.<br><br>
                                2. Stå max 1 meter fra vandhanen/
                                brusehovedet.<br><br>
                                3. Tryk "Tilføj filter".
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button class="btn btn-btn-p text-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Tilbage</button>
                                <button class="btn btn-btn-p text-light" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Videre</button>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <img src="images/Modal-3.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 4-->
                <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0 flex-column">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-title" id="exampleModalToggleLabel4">
                                  <img src="images/Group%20Modal%203.svg">
                                </div>
                            </div>
                            <div class="modal-body ">
                                Dit filter er nu klar til at måle dit
                                vandforbrug fra den vandhane/bruser.
                                Hvis du vil tilføje flere filtre, gentager du
                                processen.
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button class="btn px-5 btn-btn-p text-light" data-bs-toggle="modal">Kom i gang</button>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <img src="images/Modal-4.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal 5-->
                <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="exampleModalToggleLabel5">
                                    Dit filter blev tilføjet
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Du kan nu se vandforbruget fra
                                denne enhed i din oversigt.
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button type="button" class="btn btn-btn-p text-light px-5" data-bs-dismiss="modal">Okay</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--btn Modal-->
                <a class="bg-light rounded-3 d-flex flex-row w-95 p-3" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                    <img src="images/info-square-fill.svg">
                    <p class="text-dark ms-4">Vejledning</p>
                </a>

            </div>
        </div>


        <div class="d-flex justify-content-center mt-7">
            <a href="index.php" class="bg-dark rounded-3 d-flex flex-row w-95 p-3 justify-content-center">
                <p class="text-light ">Log ud</p>
            </a>

        </div>

    </div>

</section>

<nav class="bg-nav-p  position-fixed bottom-0 w-100 rounded-bottom  ">
    <div class="d-flex flex-row justify-content-between w-100 align-items-center mt-3 mb-3 ">

        <a href="Graf.php" class="col-4 d-flex justify-content-center">
            <img src="images/Group%20184.svg" alt="nav-icon">
        </a>

        <a href="Oversigt.php" class="col-4 d-flex justify-content-center">
            <img src="images/droplet-nav.svg" alt="nav-icon">
        </a>

        <a href="Indstillinger.php" class="col-4 d-flex justify-content-center">
            <img src="images/icon3.svg" alt="nav-icon">
        </a>
    </div>
</nav>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
