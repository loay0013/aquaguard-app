<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Log ind</title>

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
<body>

<section>
	<div class="background-welcome">
		<a href="index.php">
			<div class="d-flex justify-content-start p-3">
				<img src="images/Group%208.svg">
			</div>
		</a>

		<div class="row justify-content-center mx-3">
			<div class="col-12 text-center mt-5 p-3">
				<h1>Hej igen</h1>
				<h2>Lad os få styr på dit vandforbrug.</h2>
			</div>

			<div class="col-12 p-0 d-flex flex-column align-content-center my-5">
				<form autocomplete="off">
					<div class="form-username">
						<input type="email" id="form2Example1" placeholder="Brugernavn" class="form-control"/>
						<label class="form-label" for="form2Example1"></label>
					</div>

					<div class="form-password">
						<input type="password" id="form2Example2" placeholder="Kodeord" class="form-control"/>
						<label class="form-label" for="form2Example2"></label>
					</div>
				</form>

				<div class="d-flex justify-content-end">
					<a class="input-password">Glemt kodeord?</a>
				</div>
				<div class="d-flex justify-content-center py-5 mt-2">
					<a href="Oversigt.php" class="d-flex justify-content-center align-items-center log-ind btn btn-primary w-100" type="submit">Log ind</a>
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
					<h6 class="m-0 fw-normal">Har du ikke en bruger? <span><a class="fw-semibold" href="Opret%20bruger.php">Opret nu</a></span></h6>
				</div>
		</div>
	</div>
</section>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
