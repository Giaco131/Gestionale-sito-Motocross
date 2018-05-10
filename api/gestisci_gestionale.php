<?php class GestisciGestionale {
	private $database;

	public function __construct($address,$dbName, $utente, $password) {
		$this->database = new PDO("mysql:host=$address;dbname=$dbName",
						$utente,
						$password);
	}

	public function registerUtente($utente, $password) {
		$sql = 'INSERT INTO Utenti (Utente, Password) VALUES (:utente, :password)';
		$stato = $this->database->prepare($sql);
		$dati = [':utente'   => $utente,
			     ':password' => $password];

		return $stato->execute($dati);
	}

	public function loginUtente($utente, $password) {
		$sql = 'SELECT CodUtente FROM Utenti WHERE Utente=:utente AND Password=:password';
		$stato = $this->database->prepare($sql);
		$dati = [':utente'   => $utente,
			     ':password' => $password];

		if(!$stato->execute($dati)) {
			return null;
		}
		$risposta = $stato->fetchAll(PDO::FETCH_ASSOC);

		if(empty($risposta))
			return null;
		return $risposta[0]['CodUtente'];
	}

	public function aggiungiRecapito($id, $tipo, $recapito) {
		$sql = 'INSERT INTO Recapiti (CodUtente, Tipo, Recapito) VALUES (:id, :tipo, :recapito)';
		$stato = $this->database->prepare($sql);
		$dati = [':id'       => $id,
			     ':tipo'     => $tipo,
			     ':recapito' => $recapito];

		return $stato->execute($dati);
	}

	public function aggiungiAbbonamento($id, $nome, $prezzo, $durata) {
		$sql = 'INSERT INTO Abbonamenti (CodUtente, NomeAbbonamento, Prezzo, Durata) VALUES (:id, :nome, :prezzo, :durata)';
		$stato = $this->database->prepare($sql);
		$dati = [':id'     => $id,
			     ':nome'   => $nome,
			     ':prezzo' => $prezzo,
			     ':durata' => $durata];

		return $stato->execute($dati);
	}

	public function aggiungiGara($id, $giorno, $nome, $categorie) {
		$sql = 'INSERT INTO Gare (CodUtente, Giorno, NomeGara, Categorie) VALUES (:id, :giorno, :nome, :categorie)';
		$stato = $this->database->prepare($sql);
		$dati = [':id'        => $id,
				 ':giorno'    => $giorno,
			     ':nome'      => $nome,
			     ':categorie' => $categorie];
		
		return $stato->execute($dati);
	}

	public function aggiungiOrario($id, $giorno, $da, $a) {
		$sql = 'INSERT INTO Orari (CodUtente, Giorno, Da, A) VALUES (:id, :giorno, :da, :a)';
		$stato = $this->database->prepare($sql);
		$dati = [':id'     => $id,
			     ':giorno' => $giorno,
			     ':da'     => $da,
			     ':a'      => $a];

		return $stato->execute($dati);
	}
} ?>