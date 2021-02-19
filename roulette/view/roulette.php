<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Le Jeu de la Roulette</title>
  <link rel="stylesheet" href="../view/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
</head>
	<body>
		<header>
			<h2> Le Jeu de la Roulette </h2>
		</header>
		<h3>VOTRE PARI</h3>
		<p>Selectionnez le montant que vous souhaitez miser, votre mode de pari, soit sur un chiffre, soit sur la parité, et misez!</p>
		<div class="pari">
		<img id="roulette" src="../images/roulette.png" alt="roulette">
		<div class="formulaire">
		<form action="../controller/controller.php" method="POST">
			<p>Votre mise:</p>
			<input type="text" name="mise" placeholder="Montant" checked>
			<p>Le numero :</p>
			<input type="number" name="numero" min="1" max="36">
			<p>OU</p>
			<div class="parite"><input  type="radio" id="pair" name="parite" value="pair"><label for="pair">Pair</label></div>
			<div class="parite"><input type="radio" id="impair" name="parite" value="impair"><label for="impair">Impair</label></div>
			<button id="miser" name="miser">Miser</button>
		</div>
		</form>
		</div>
		<footer>
			<a href='../controller/controller.php?inscription'> Inscription</a>
			<a href="../controller/controller.php?deco">Deconnexion</a>
		</footer>

	</body>

</html>
