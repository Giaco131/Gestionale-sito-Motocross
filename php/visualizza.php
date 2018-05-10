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
					<div class='link'><a href='../api/logout.php'>Home</a></div>
				</div>

				<div class='visualizza'>
					<input id='bottoneRecapito' type='button' value='Visualizza recapito'>
					<form id='visualizzaRecapito' action='#' method='POST'>
						<table>
							<tr>
								<td><select name='nomeRecapito' style='width:100%'>
									<option value='tutti'>Tutti</option>
									<option value='telefono'>Telefono</option>
									<option value='fisso'>Fisso</option>
									<option value='email'>Email</option>
									<option value='skype'>Skype</option>
									<option value='facebook'>Facebook</option>
									<option value='twitter'>Twitter</option>
									<option value='instagram'>Instagram</option>
								</select></td>
							</tr>
						</table>
						<input type='submit' value='Visualizza'>
					</form>
					
					<input id='bottoneAbbonamento' type='button' value='Visualizza abbonamento'>
					<form id='visualizzaAbbonamento' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='nomeAbbonamento' type='text' placeholder='Nome'></td>
								<td><input name='prezzoAbbonamento' type='text' placeholder='Prezzo'></td>
								<td><input name='durataAbbonamento' type='text' placeholder='Durata'></td>
							</tr>
						</table>
						<input type='submit' value='Visualizza'>
					</form>


					<input id='bottoneGara' type='button' value='Visualizza gare'>
					<form id='visualizzaGara' action='#' method='POST'>
						<input type='submit' value='Visualizza'>
					</form>


					<input id='bottoneOrario' type='button' value='Visualizza un orario'>
					<form id='visualizzaOrario' action='#' method='POST'>
						<table>
							<tr>
								<td><select name='giorno' style='width:100%'>
									<option value='tutti'>Tutti</option>
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
						<input type='submit' value='Visualizza'>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>