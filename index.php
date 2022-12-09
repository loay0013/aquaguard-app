<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
	<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
	<meta charset="utf-8">

	<!-- Titel som ses oppe i browserens tab mv. -->
	<title>Welcome to Aquaguard</title>

	<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<section class="">
	<div class="background-welcome d-flex align-items-center justify-content-center">
		<div class="row gap-5 mx-3 d-flex justify-content-center">
			<div class="col-12 p-0">
				<img src="images/aqua-logo.svg" alt="logo" width="100%" height="100%">
			</div>

			<div class="col-12 p-0">
				<ul class="nav nav-pills nav-justified m-0" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link-1 active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
						   aria-controls="pills-login" aria-selected="true">Login</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link-2 active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
						   aria-controls="pills-register" aria-selected="false">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

</body>
</html>
