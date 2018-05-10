<?php function stampaRisultato() {
	if(isset($_GET['result']) and isset($_GET['message'])) {
		switch($_GET['result']) {
			case 'okee':
				echo "<p class='okee'>".$_GET['message'].'</p>';
				break;
			case 'nope':
				echo "<p class='nope'>".$_GET['message'].'</p>';
				break;
		}
	}
}

function stampaTabelle($titoli, $dati) {
	echo '<table class="rappresenta"><tr>';
	foreach($titoli as $value) {
		echo "<th>$value</th>";
	}
	echo '</tr>';

	foreach($dati as $riga) {
		echo '<tr>';
		foreach($riga as $colonna) {
			echo "<td>$colonna</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
}?>