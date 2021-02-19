<!DOCTYPE html>
<html lang="fr">
<head>
  <title>TP Q2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
  <h2>Ex Q2</h2>
<?php
  $tirage=[];
	for ($i=0;$i<5;$i++) {
		$tirage[$i] = rand() % 50;
		echo "<b>".$tirage[$i]."</b>";
		echo "<br>";
	}
?>
</div>
</body>
</html>
