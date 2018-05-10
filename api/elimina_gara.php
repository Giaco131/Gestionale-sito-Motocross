<?php include 'gestisci_gestionale.php';

if(isset($_COOKIE['id']) and isset($_POST['dataGara'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}

	if($database->eliminaGara($_COOKIE['id'], $_POST['dataGara'])) {
		header('Location: ../php/elimina.php?result=okee&message=Transazione%20eseguita%20con%20successo%2e');
	} else {
		header('Location: ../php/elimina.php?result=nope&message=Impossibile%20eseguire%20la%20transazione%2e');
	}
} else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>