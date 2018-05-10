<?php include 'gestisci_gestionale.php';
include '../libraries/comodita.php';

if(isset($_COOKIE['id'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}
	
	$dati = $database->selezionaRecapiti($_COOKIE['id']);
	if($dati!=null) {?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>

		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link href='../css/avel.css' type='text/css' rel='stylesheet'>

		<link rel='icon' href='../images/logo.png' type='image/png'>
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<h1>Gestionale per una pista di Motocross</h1>
					<div class='link'><a href='../php/aggiungi.php'>Aggiungi</a></div>
					<div class='selected'><a href='../php/visualizza.php'>Visualizza</a></div>
					<div class='link'><a href='../php/elimina.php'>Elimina</a></div>
					<div class='link'><a href='../php/logout.php'>Home</a></div>
				</div>

				<div class='visualizza'>
					<h1>Recapiti</h1>
					<?php stampaTabelle(['Tipo','Recapito'],$dati); ?>
				</div>
			</div>
		</center>
	</body>
</html>
	<?php } else {
		header('Location: ../php/visualizza.php?result=nope&message=Nessun%20recapito%20disponibile%20%2e');
	}
}  else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>