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
}?>