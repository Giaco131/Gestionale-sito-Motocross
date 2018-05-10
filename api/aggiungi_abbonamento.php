<?php include 'gestisci_gestionale.php';

if(isset($_COOKIE['id']) and isset($_POST['nomeAbbonamento']) and isset($_POST['prezzoAbbonamento']) and isset($_POST['durataAbbonamento'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}
	
	if($database->aggiungiAbbonamento($_COOKIE['id'], $_POST['nomeAbbonamento'], $_POST['prezzoAbbonamento'], $_POST['durataAbbonamento'])) {
		header('Location: ../php/aggiungi.php?result=okee&message=Abbonamento%20inserito%20con%20successo%2e');
	} else {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20inserire%20l%27abbonamento%2e');
	}
}  else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>