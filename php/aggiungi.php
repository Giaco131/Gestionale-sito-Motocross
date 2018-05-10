<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>

		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link href='../css/avel.css' type='text/css' rel='stylesheet'>

		<link rel="icon" href="../images/logo.png" type="image/png">

		<script src="../libraries/jquery.js"></script>
		<script src="../js/aggiungi.js"></script>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<h1>Gestionale per una pista di Motocross</h1>
					<div class='selected'><a href='#'>Aggiungi</a></div>
					<div class='link'><a href='visualizza.php'>Visualizza</a></div>
					<div class='link'><a href='elimina.php'>Elimina</a></div>
					<div class='link'><a href='../api/logout.php'>Home</a></div>
				</div>

				<div class='aggiungi'>
					<input id='bottoneRecapito' type='button' value='Aggiungi recapito'>
					<form id='inserisciRecapito' action='#' method='POST'>
						<table>
							<tr>
								<td><select name='nomeRecapito'>
									<option value='telefono'>Telefono</option>
									<option value='fisso'>Fisso</option>
									<option value='email'>Email</option>
									<option value='skype'>Skype</option>
									<option value='facebook'>Facebook</option>
									<option value='twitter'>Twitter</option>
									<option value='instagram'>Instagram</option>
								</select></td>
								<td><input name='recapito' type='text' placeholder='Recapito' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>
					
					<input id='bottoneAbbonamento' type='button' value='Aggiungi abbonamento'>
					<form id='inserisciAbbonamento' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='nomeAbbonamento' type='text' placeholder='Nome' required></td>
								<td><input name='prezzoAbbonamento' type='text' placeholder='Prezzo' required></td>
								<td><input name='durataAbbonamento' type='text' placeholder='Durata' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>
					
					<input id='bottoneGara' type='button' value='Aggiungi una gara'>
					<form id='inserisciGara' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='dataGara' type='date' required></td>
								<td><input name='descrizioneGara' type='text' placeholder='Descrizione' required></td>
								<td><input name='categoriaGara' type='text' placeholder='Categorie' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>

					<input id='bottoneOrario' type='button' value='Aggiungi un orario'>
					<form id='inserisciOrario' action='#' method='POST'>
						<table>
							<tr>
								<td><select name='giorno'>
									<option value='lunedi'>Lunedi</option>
									<option value='martedi'>Martedi</option>
									<option value='mercoledi'>Mercoledi</option>
									<option value='giovedi'>Giovedi</option>
									<option value='venerdi'>Venerdi</option>
									<option value='sabato'>Sabato</option>
									<option value='domenica'>Domenica</option>
								</select></td>
								<td><input name='da' type='text' placeholder='Da ore'></td>
								<td><input name='a' type='text' placeholder='A ore'></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>