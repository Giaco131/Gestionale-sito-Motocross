<?php include 'gestisci_gestionale.php';

if(isset($_COOKIE['id']) and isset($_POST['giorno']) and isset($_POST['da']) and isset($_POST['a'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}

	if($database->aggiungiOrario($_COOKIE['id'], $_POST['giorno'], $_POST['da'], $_POST['a'])) {
		header('Location: ../php/aggiungi.php?result=okee&message=Orario%20inserito%20con%20successo%2e');
	} else {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20inserire%20l%27orario%2e');
	}
} else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>