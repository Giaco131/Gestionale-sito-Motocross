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
					<div class='link'><a href='aggiungi.php'>Aggiungi</a></div>
					<div class='selected'><a href='#'>Visualizza</a></div>
					<div class='link'><a href='elimina.php'>Elimina</a></div>
					<div class='link'><a href='logout.php'>Logout</a></div>
				</div>

				<div class='visualizza'>
					<input id='bottonePista' type='button' value='Visualizza pista'>
					<form id='visualizzaPista' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='nomePista' type='text' placeholder='Nome'></td>
								<td><input name='indirizzoPista' type='text' placeholder='Indirizzo'></td>
							</tr>
						</table>
						<input type='submit' value='Visualizza'>
					</form>

					<input id='bottoneRecapito' type='button' value='Visualizza recapito'>
					<form id='visualizzaRecapito' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='nomePista' type='text' placeholder='Nome pista'></td>
								<td><select name='nomeRecapito'>
									<option value='tutti'>Tutti</option>
									<option value='telefono'>Telefono</option>
									<option value='fisso'>Fisso</option>
									<option value='email'>Email</option>
									<option value='skype'>Skype</option>
								</select></td>
							</tr>
						</table>
						<input type='submit' value='Visualizza'>
					</form>
					
					<input id='bottoneUtente' type='button' value='Visualizza utente'>
					<form id='visualizzaUtente' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='codiceUtente' type='text' placeholder='Codice fiscale'></td>
								<td><input name='nomeUtente' type='text' placeholder='Nome'></td>
								<td><input name='cognomeUtente' type='text' placeholder='Cognome'></td>
								<td><input name='scadenzaLicenza' type='date' title='Scadenza licenza'></td>
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
					
					<input id='bottoneAbbonamentoUtente' type='button' value='Visualizza abbonamento ad un utente'>
					<form id='visualizzaAbbonamentoUtente' action='#' method='POST'>
						<table>
							<tr>
								<td><input name='codiceUtente' type='text' placeholder='Codice fiscale'></td>
								<td><input name='nomeAbbonamento' type='text' placeholder='Nome abbonamento'></td>
							</tr>
						</table>
						<input type='submit' value='Visualizza'>
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
						$('#visualizzaPista').slideDown(131);
					}
				});
				$('#bottoneRecapito').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(1)) {
						$('#visualizzaRecapito').slideToggle(131);
					}
				});
				$('#bottoneUtente').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(2)) {
						$('#visualizzaUtente').slideToggle(131);
					}
				});
				$('#bottoneAbbonamento').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(3)) {
						$('#visualizzaAbbonamento').slideToggle(131);
					}
				});
				$('#bottoneAbbonamentoUtente').click(function() {
					$('form').slideUp(131);
					if(checkAndChangeStati(4)) {
						$('#visualizzaAbbonamentoUtente').slideToggle(131);
					}
				});
			});
		</script>
	</body>
</html>