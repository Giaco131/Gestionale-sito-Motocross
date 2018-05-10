<?php include 'gestisci_gestionale.php';

if(isset($_COOKIE['id']) and isset($_POST['nomeRecapito']) and isset($_POST['recapito'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}
	
	if($database->aggiungiRecapito($_COOKIE['id'], $_POST['nomeRecapito'], $_POST['recapito'])) {
		header('Location: ../php/aggiungi.php?result=okee&message=Recapito%20inserito%20con%20successo%2e');
	} else {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20inserire%20il%20recapito%2e');
	}
}  else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>