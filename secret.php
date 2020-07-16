<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=799">
		
		<title>resultat connexion</title>
	</head>

	<body>

		<?php
			if (isset($_POST['mdp']) AND (htmlspecialchars($_POST['mdp']) == 'kangourou'))
			{
				echo '<p>Vous avez accès au code secret :<br/>1234</p>';
			}

			else
			{
		?>

		<form action="secret.php" method="POST">

		<p>Vous êtes sur le point de vous connecter au serveur de l'ESA. Quel est votre mot de passe :</p>

		<p><input type="password" name="mdp"></p>
		<p><input type="submit"></p>
	
		</form>

		<?php
			}
		?>

	</body>