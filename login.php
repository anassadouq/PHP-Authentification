<html lang="en">
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="loginCss.css">
	</head>
	<?php 
		require 'connect.php';
	?>
	<body>
		<form method="post" action="connexion.php">
			<h1>Bienvenue dans la page de connexion</h1>
			<input type="text" name="email" placeholder="Votre Email"><br><br> 
			<input type="password" name="password" placeholder="Votre Mot de passe"><br><br> 
			<input type="checkbox" name="check" id="check">
			<label>se souvenir de moi</label><br>
			
			<td align="center"><br>
			<button class="button">Se connecte</button><br><br>
			<a href="#">Mot de passe oublie ?</a><br><br>
			<td align="center"><br>
			<a href="s'inscrire.php" class="oublie">Creer nouveau compte</a><br>
		</form>
	</body>
</html>