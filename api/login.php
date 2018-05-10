<?php
	include 'gestisci_gestionale.php';

	if(isset($_POST['utente']) and isset($_POST['password'])) {
		try {
			$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
		
		$id = $database->loginUtente($_POST['utente'], $_POST['password']);
		var_dump($id);
		if($id != null) {
			setcookie('id',$id,time()+3600,'/');
			header('Location: ../php/aggiungi.php');
		} else {
			header('Location: ../php/pagina_login.php?result=nope&message=Credenziali%20errate%2e%2e%2e');
		}
	}
?>