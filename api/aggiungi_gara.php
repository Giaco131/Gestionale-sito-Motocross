<?php include 'gestisci_gestionale.php';

if(isset($_COOKIE['id']) and isset($_POST['dataGara']) and isset($_POST['nomeGara']) and isset($_POST['categoriaGara'])) {
	try {
		$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
	} catch(PDOException $e) {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20accedere%20al%20database%2e');
		exit();
	}

	if($database->aggiungiGara($_COOKIE['id'], $_POST['dataGara'], $_POST['nomeGara'], $_POST['categoriaGara'])) {
		header('Location: ../php/aggiungi.php?result=okee&message=Gara%20inserita%20con%20successo%2e');
	} else {
		header('Location: ../php/aggiungi.php?result=nope&message=Impossibile%20inserire%20la%20gara%2e');
	}
} else if(empty($_COOKIE['id'])){
	header('Location: ../php/pagina_login.php?result=nope&message=Sessione%20scaduta%2e%2e%2e');
}?>