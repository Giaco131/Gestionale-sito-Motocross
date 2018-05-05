<?php

class GestioneDBMotocross {
	private $database;

	public function __construct() {
		$this->database = new PDO('mysql:host=localhost;dbname:gestionale_motocross',
							'giaco',
							'Me2PpZsT2luqZdAc');

		echo "Connesso al db...\n";
	}

	public function inserisciUtente($utente, $password) {
		$sql = 'INSERT INTO utenti (Utente, Password) VALUES (:utente, :password)';
		$dati = [':utente' => $utente,
				 ':password' => $password];

		$stato = $this->database->prepare($sql);
		if(! $stato->execute($dati)) {
			throw new Exception( implode(', ', $this->database->errorInfo()) );
		}
	}

	public function inserisciRecapito($utente, $tipo, $recapito) {
		$sql = 'INSERT INTO recapiti (Utente, Tipo, Recapito) VALUES (:utente, :tipo, :recapito)';
		$dati = [':utente' => $utente,
				 ':tipo' => $tipo,
				 ':recapito' => $recapito];

		$stato = $this->database->prepare($sql);
		if(! $stato->execute($dati)) {
			throw new Exception( implode(', ', $this->database->errorInfo()) );
		}
	}

	public function inserisciAbbonamento($utente, $nome, $prezzo, $durata) {
		$sql = 'INSERT INTO abbonamenti (Utente, Abbonamento, Prezzo, Durata) VALUES (:utente, :nome, :prezzo, :durata)';
		$dati = [':utente' => $utente,
				 ':nome' => $nome,
				 ':prezzo' => $prezzo,
				 ':durata' => $durata];

		$stato = $this->database->prepare($sql);
		if(! $stato->execute($dati)) {
			throw new Exception( implode(', ', $this->database->errorInfo()) );
		}
	}
}

$test = new GestioneDBMotocross();
$test->inserisciAbbonamento('giaco', 'prova', '131', 'annuale');
?>