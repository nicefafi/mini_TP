<!DOCTYPE html>
<html lang="fr">
<head>
  <title>TP Q3 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>Ex Q3</h2>
  <table class="table">
    <?php
      $utilisateur = array(
        'nom'               => 'dhaouadi',
        'Prenom'            => 'ahmed',
        'date de naissance' => '01/01/2000',
        'mail'              => 'ahmed.dhaouadi@etu.univ-lyon1.fr',
        'mdp'=>'Motdepasse'
      );
      foreach ($utilisateur as $key => $val) {
        echo '<tr>';
        echo '<th scope="row">'. $key .'</th>';
        echo '<td>'. $val .'</td>';
        echo'</tr>';
      }
    ?>
  </table>
</div>
</body>
</html>
