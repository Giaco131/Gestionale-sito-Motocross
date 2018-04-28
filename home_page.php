<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>
		<link href='stile/stileHomePage.css' type='text/css' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link rel="shortcut icon" type="image/png" href="immagini/logo.png"/>
		<script src="script/jquery.js"></script>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='aggiungi'>
					<input id='bottonePista' type='button' value='Aggiungi pista'>
					<form id='inserisciPista' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='nomePista' type='text' placeholder='Nome' required></td>
								<td><input name='indirizzoPista' type='text' placeholder='Indirizzo' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>

					<input id='bottoneRecapito' type='button' value='Aggiungi recapito'>
					<form id='inserisciRecapito' action='#' method='POST'>
						<table>
							<tr>
								<td><select name='nomeRecapito'>
									<option value='telefono'>Telefono</option>
									<option value='fisso'>Fisso</option>
									<option value='email'>Email</option>
									<option value='skype'>Skype</option>
								</select></td>
								<td><input name='recapito' type='text' placeholder='Recapito' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>
					
					<input id='bottoneUtente' type='button' value='Aggiungi utente'>
					<form id='inserisciUtente' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='codiceUtente' type='text' placeholder='Codice fiscale' required></td>
								<td><input name='nomeUtente' type='text' placeholder='Nome' required></td>
								<td><input name='cognomeUtente' type='text' placeholder='Cognome' required></td>
								<td><input name='scadenzaLicenza' type='date' title='Scadenza licenza'></td>
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
					
					<input id='bottoneAbbonamentoUtente' type='button' value='Aggiungi abbonamento ad un utente'>
					<form id='inserisciAbbonamentoUtente' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='codiceUtente' type='text' placeholder='Codice fiscale' required></td>
								<td><input name='nomeAbbonamento' type='text' placeholder='Nome abbonamento' required></td>
								<td><input name='scadenzaAbbonamento' type='date'  title='Scadenza abbonamento' required></td>
							</tr>
						</table>
						<input type='submit' value='Aggiungi'>
					</form>
				</div>

				<div class='visualizza'>
				</div>
				
				<div class='rimuovi'>
				</div>
			</div>
		</center>

		<script>
			$(document).ready(function() {
				$('form').hide();

				$('#bottonePista').click(function() {
					$('#inserisciPista').slideToggle(131);
				});
				$('#bottoneRecapito').click(function() {
					$('#inserisciRecapito').slideToggle(131);
				});
				$('#bottoneUtente').click(function() {
					$('#inserisciUtente').slideToggle(131);
				});
				$('#bottoneAbbonamento').click(function() {
					$('#inserisciAbbonamento').slideToggle(131);
				});
				$('#bottoneAbbonamentoUtente').click(function() {
					$('#inserisciAbbonamentoUtente').slideToggle(131);
				});
			});
		</script>
	</body>
</html>