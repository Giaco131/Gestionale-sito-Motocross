<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>
		<link href='stile/stile_interrogazioni_db.css' type='text/css' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link rel="icon" href="immagini/logo.png" type="image/png">
		<script src="script/jquery.js"></script>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<div class='selected'><a href='#'>Aggiungi</a></div>
					<div class='link'><a href='visualizza.php'>Visualizza</a></div>
					<div class='link'><a href='elimina.php'>Elimina</a></div>
					<div class='link'><a href='logout.php'>Logout</a></div>
				</div>

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
								<td><input name='nomePista' type='text' placeholder='Nome pista' required></td>
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
			</div>
		</center>

		<script>
			var statiPremuto = [false,false,false,false,false];
			function checkAndChangeStati(index) {
				statiPremuto[index] = !statiPremuto[index];

				for(let i=0; i<statiPremuto.length ;i++) {
					if(i == index)
						continue;
					statiPremuto[i] =  false;
				}

				return statiPremuto[index];
			}

			$(document).ready(function() {
				$('form').hide();

				$('#bottonePista').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(0)) {
						$('#inserisciPista').slideDown(131);
					}
				});
				$('#bottoneRecapito').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(1)) {
						$('#inserisciRecapito').slideToggle(131);
					}
				});
				$('#bottoneUtente').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(2)) {
						$('#inserisciUtente').slideToggle(131);
					}
				});
				$('#bottoneAbbonamento').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(3)) {
						$('#inserisciAbbonamento').slideToggle(131);
					}
				});
				$('#bottoneAbbonamentoUtente').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(4)) {
						$('#inserisciAbbonamentoUtente').slideToggle(131);
					}
				});
			});
		</script>
	</body>
</html>