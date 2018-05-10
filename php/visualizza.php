<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>

		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link href='../css/avel.css' type='text/css' rel='stylesheet'>

		<link rel="icon" href="../images/logo.png" type="image/png">

		<script src="../libraries/jquery.js"></script>
		<script src="../js/visualizza.js"></script>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<h1>Gestionale per una pista di Motocross</h1>
					<div class='link'><a href='aggiungi.php'>Aggiungi</a></div>
					<div class='selected'><a href='#'>Visualizza</a></div>
					<div class='link'><a href='elimina.php'>Elimina</a></div>
					<div class='link'><a href='logout.php'>Home</a></div>
				</div>

				<div class='visualizza'>
					<input id='bottoneRecapito' type='button' value='Visualizza recapiti'>
					<form id='visualizzaRecapito' action='../api/visualizza_recapiti.php' method='POST'>
						<input type='submit' value='Visualizza'>
					</form>
					
					<input id='bottoneAbbonamento' type='button' value='Visualizza abbonamenti'>
					<form id='visualizzaAbbonamento' action='../api/visualizza_abbonamenti.php' method='POST'>
						<input type='submit' value='Visualizza'>
					</form>


					<input id='bottoneGara' type='button' value='Visualizza gare'>
					<form id='visualizzaGara' action='../api/visualizza_gare.php' method='POST'>
						<input type='submit' value='Visualizza'>
					</form>


					<input id='bottoneOrario' type='button' value='Visualizza orari'>
					<form id='visualizzaOrario' action='../api/visualizza_orari.php' method='POST'>
						<input type='submit' value='Visualizza'>
					</form>
					<?php include '../libraries/comodita.php';
					stampaRisultato();?>
				</div>
			</div>
		</center>
	</body>
</html>