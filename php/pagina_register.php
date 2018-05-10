<!DOCTYPE html>
<html>
	<head>
		<title>Gestione pista motocross</title>

		<link href='https://fonts.googleapis.com/css?family=Do Hyeon' rel='stylesheet'>
		<link href='../css/irl.css' type='text/css' rel='stylesheet'>

		<link rel="icon" href="../images/logo.png" type="image/png">
	</head>
	<body>
		<center>
			<div class='container'>
				<div class='navigation'>
					<h1>Gestionale per una pista di Motocross</h1>
					<div class='link'><a href='../index.html'>Home</a></div>
					<div class='selected'><a href='#'>Registrazione</a></div>
					<div class='link'><a href='pagina_login.php'>Login</a></div>
				</div>

				<div class='content'>
					<form action='../api/register.php' method='POST'>
						<input name='utente' type='text' placeholder='Utente'><br>
						<input name='password' type='Password' placeholder='Password'><br>
						<input type='submit' value='Registrati'>
					</form>
					<?php
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
					?>
				</div>
			</div>
		</center>
	</body>
</html>