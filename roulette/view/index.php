<?php
if(isset($_SESSION['user'])){
	header('Location: ../controller/controller.php');
}?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Index</title>
  <link rel="stylesheet" href="../view/style.css"/>
 <link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet"> 
</head>
	<body>
		<header>
			<h1>Unibête</h1>
			<h2> Connexion - Jeu de la Roulette </h2>
		</header>
		<form action='../controller/controller.php' method="POST">
		<div class="form">
			<input class="champ" type="text" name="username" placeholder="Nom d'Utilisateur">
			<input class="champ" type="password" name="password" placeholder="Mot de passe">
			<button name="bouton_connexion">Connexion</button>
			<button type="reset" name="effacer">Effacer</button>
		</div>
		</form>
		<footer>
			<a href='../controller/controller.php?inscription'>Inscription</a>
		</footer>
	</body>
</html>