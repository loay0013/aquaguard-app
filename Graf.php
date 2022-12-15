<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Graf</title>

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
<body class="body-2">

<!-- Her skal sidens indhold ligge -->
<section class="background-welcome h-100 pb-5">

    <div>

        <div class="d-flex justify-content-end p-3">
            <img src="images/kl-icon.svg">
        </div>
        <div class="mt-5">
            <p class="text-center mb-3 fw-medium">Dit månedlige forbrug</p>
        </div>

        <div class="d-flex justify-content-center">
           <img src="images/Group%20graf.svg">
        </div>



    </div>

</section>

<nav class="bg-nav-p  position-fixed bottom-0 w-100 rounded-bottom ">
    <div class="d-flex flex-row justify-content-between w-100 align-items-center mt-3 mb-3 ">

        <a href="Graf.php" class="col-4 d-flex justify-content-center">
            <img src="images/icon1.svg" alt="nav-icon">
        </a>

        <a href="Oversigt.php" class="col-4 d-flex justify-content-center">
            <img src="images/droplet-nav.svg" alt="nav-icon">
        </a>

        <a href="Indstillinger.php" class="col-4 d-flex justify-content-center">
            <img src="images/gear-nav.svg" alt="nav-icon">
        </a>
    </div>
</nav>

</body>
</html>
