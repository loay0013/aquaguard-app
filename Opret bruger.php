<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
	<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
	<meta charset="utf-8">

	<!-- Titel som ses oppe i browserens tab mv. -->
	<title>Opret bruger</title>

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

<section>
	<div class="background-welcome">
        <a href="index.php">
        <div class="d-flex justify-content-start p-3">
            <img src="images/Group%208.svg">
        </div>
        </a>

		<div class="row justify-content-center mx-3">
			<div class="col-12 text-center my-5 py-3">
				<h1 class="fs-5">Opret bruger</h1>
				<h2 class="fs-6">Kom i gang med appen.</h2>
			</div>

		<div class="col-6 ps-0">
			<div class="form-username">
				<input type="text" id="form2Example1" placeholder="Fornavn" class="form-control"/>
				<label class="form-label" for="form2Example1"></label>
			</div>
		</div>

		<div class="col-6 pe-0">
			<div class="form-username">
				<input type="text" id="form2Example1" placeholder="Efternavn" class="form-control"/>
				<label class="form-label" for="form2Example1"></label>
			</div>
		</div>


			<div class="col-12 p-0 d-flex flex-column align-content-center mb-5">
				<form autocomplete="off">
					<div class="form-username">
						<input type="email" id="form2Example1" placeholder="Email" class="form-control"/>
						<label class="form-label" for="form2Example1"></label>
					</div>

					<div class="form-password">
						<input type="password" id="form2Example2" placeholder="Kodeord" class="form-control"/>
						<label class="form-label" for="form2Example2"></label>
					</div>

					<div class="form-password">
						<input type="password" id="form2Example2" placeholder="Gentag kodeord" class="form-control"/>
						<label class="form-label" for="form2Example2"></label>
					</div>
				</form>


				<div class="d-flex justify-content-center mt-3 py-5">
					<a class="opret-bruger d-flex align-items-center justify-content-center btn btn-primary w-100" href="Tilføj%20filter.php" type="submit">Opret bruger</a>
				</div>
			</div>

			<div class="row justify-content-center p-0">
				<div class="col-12 d-flex justify-content-center p-0">
					<h6 class="m-0">Log ind med</h6>
				</div>

				<div class="d-flex justify-content-center pt-5 pb-5 px-0">
					<div class="col-4 d-flex justify-content-center">
						<img src="images/apple.svg" height="36" alt="apple">
					</div>
					<div class="col-4 d-flex justify-content-center">
						<img src="images/google.svg" width="26" alt="google">
					</div>
					<div class="col-4 d-flex justify-content-center">
						<img src="images/fb.svg" height="30" width="30" alt="fb">
					</div>
				</div>

				<div class="d-flex justify-content-center align-items-center pb-5">
					<h6 class="m-0 fs-6">Har du allerede en bruger? <span><a href="Log%20ind.php">Log ind</a></span></h6>
				</div>
			</div>
		</div>
</section>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
