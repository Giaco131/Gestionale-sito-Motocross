<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>

		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link href='../css/avel.css' type='text/css' rel='stylesheet'>

		<link rel="icon" href="../images/logo.png" type="image/png">

		<script src="../libraries/jquery.js"></script>
		<script src="../js/elimina.js"></script>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<h1>Gestionale per una pista di Motocross</h1>
					<div class='link'><a href='aggiungi.php'>Aggiungi</a></div>
					<div class='link'><a href='visualizza.php'>Visualizza</a></div>
					<div class='selected'><a href='#'>Elimina</a></div>
					<div class='link'><a href='logout.php'>Home</a></div>
				</div>

				<div class='elimina'>
					<input id='bottoneRecapito' type='button' value='Elimina recapito'>
					<form id='eliminaRecapito' action='../api/elimina_recapito.php' method='POST'>
						<table>
							<tr>
								<td><input name='recapito' type='text' placeholder='Recapito' required></td>
							</tr>
						</table>
						<input type='submit' value='Elimina'>
					</form>
					
					<input id='bottoneAbbonamento' type='button' value='Elimina abbonamento'>
					<form id='eliminaAbbonamento' action='../api/elimina_abbonamento.php' method='POST'>
						<table>
							<tr>
								<td><input name='nomeAbbonamento' type='text' placeholder='Nome' required></td>
							</tr>
						</table>
						<input type='submit' value='Elimina'>
					</form>
					
					<input id='bottoneGara' type='button' value='Elimina una gara'>
					<form id='eliminaGara' action='../api/elimina_gara.php' method='POST'>
						<table>
							<tr>
								<td><input name='dataGara' type='date' required></td>
							</tr>
						</table>
						<input type='submit' value='Elimina'>
					</form>

					<input id='bottoneOrario' type='button' value='Elimina un orario'>
					<form id='eliminaOrario' action='../api/elimina_orario.php' method='POST'>
						<table>
							<tr>
								<td><select name='giorno' style='width:100%'>
									<option value='lunedi'>Lunedi</option>
									<option value='martedi'>Martedi</option>
									<option value='mercoledi'>Mercoledi</option>
									<option value='giovedi'>Giovedi</option>
									<option value='venerdi'>Venerdi</option>
									<option value='sabato'>Sabato</option>
									<option value='domenica'>Domenica</option>
								</select></td>
							</tr>
						</table>
						<input type='submit' value='Elimina'>
					</form>
					<?php include '../libraries/comodita.php';
					stampaRisultato();?>
				</div>
			</div>
		</center>
	</body>
</html>