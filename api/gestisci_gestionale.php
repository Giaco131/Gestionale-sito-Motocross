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
} ?>