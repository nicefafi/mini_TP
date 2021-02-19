<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Inscription - Jeu de la Roulette</title>
  <link rel="stylesheet" href="../view/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <h2> Inscription - Jeu de la Roulette </h2>
</header>
<form action="../controller/controller.php?inscription" method="POST">
  <div class="form">
    <input class="parite" type="text" name="username" placeholder="Nom d'Utilisateur">
    <input class="parite" type="password" name="password" placeholder="Mot de passe">
    <button name="bouton_inscription">Inscription</button>
  </div>
</form>
<footer>
  <a href='../controller/controller.php?index'>Acceuil</a>
</footer>
</body>

</html>
