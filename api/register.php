<?php
	include 'gestisci_gestionale.php';

	if(isset($_POST['utente']) and isset($_POST['password'])) {
		try {
			$database = new GestisciGestionale('localhost','gestionale_motocross','root','');
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
		
		if($database->registerUtente($_POST['utente'], $_POST['password'])) {
			header('Location: ../php/pagina_register.php?result=okee&message=Utente %20registrato%20con%20successo%2e%20Adesso%20ti%20puoi%20loggare%2e');
		} else {
			header('Location: ../php/pagina_register.php?result=nope&message=Utente%20gia%27%20registrato%2e%2e%2e');
		}
	}
?>