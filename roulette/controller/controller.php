<?php
session_start();

require_once('../model/DAO_Roulette.php');
require_once('../model/DAO_game.php');

$utilisateur1 = new DAO_player();
$game = new DAO_game();

if(isset($_SESSION['user'])) {
  if (isset($_GET['deco'])) {
    unset($_SESSION['user']);
    unset($_SESSION['argent']);
    include('../view/index.php');
  }
  elseif (isset($_GET['co'])) {
    include('../view/roulette.php');
  }
  elseif (!isset($_POST['miser'])) {
    if(!isset($_GET['inscriptionfail'])
      && (!isset($_GET['inscription']))) {
      echo '1';
      include('../view/roulette.php');
    }
  }
}

if(!isset($_SESSION['user'])) {
  if(isset($_GET['BadId'])) {
    echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">L\'identifiant ne correspond pas</p></div>');
    include('../view/index.php');
  }
  elseif (isset($_GET['Bad'])) {
    echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Merci de renseigner vos identifiants.</p></div>');
    include('../view/index.php');
  }

  else if(isset($_GET['BadPassw'])) {
    echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Le mot de passe ne correspond pas.</p></div>');
    include('../view/index.php');
  }
}

if (isset($_GET['InsMdp'])) {
  echo ('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Merci de renseigner un mot de passe pour la création de votre compte.</p></div>');
  include('../view/inscription.php');
}

if (isset($_GET['InsUser'])) {
  echo ('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Merci de renseigner un nom d\'utilisateur pour la création de votre compte.</p></div>');
  include('../view/inscription.php');
}

if (isset($_GET['index'])) {
  include('../view/index.php');
}


if(isset($_POST['bouton_connexion'])) {
  $utilisateur1->connexion(htmlspecialchars($_POST['username']),htmlspecialchars($_POST['password']));
}

if(isset($_POST['bouton_inscription'])) {
  $utilisateur1->inscription();
}


if(isset($_GET['inscription'])) {
  include('../view/inscription.php');
}

$resultat=rand(1,36);

if(isset($_POST['miser'])) {
  if( isset($_POST['mise']) && $_POST['mise'] != 0) {
    if( $_POST['mise'] > $_SESSION['argent']) {
      echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Vous ne disposez pas des fonds</p></div>');
      include('../view/roulette.php');
    }
    elseif( $_POST['mise'] <= $_SESSION['argent'] ) {

      if($_POST['numero'] !=''){
        if ($resultat==$_POST['numero']){
          $Profit=($_POST['mise'])*35;
          echo('<div class="resultat"><img class="jeu" src="../images/valide.png" alt="validé"></img>
              <p class="test">Vous pensiez que le résultat serait '.$_POST['numero'].' et le '.$resultat.' a été tiré. Bravo, vous gagnez: '.($_POST['mise']*35).'</p></div>');
          include('../view/roulette.php');
        }
        else {
          $Profit=0;
          echo ('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
              <p class="test">Vous avez perdu, vous pensiez que le résultat serait '.$_POST['numero'].' et le '.$resultat.' a été tiré<p></div>');
          include('../view/roulette.php');
        }
      }

      elseif($_POST['parite'] !='') {
        if ((($resultat%2)==0
            && $_POST['parite']=='pair')
          || (($resultat%2)!=0
            && $_POST['parite']=='impair')){
          $Profit=($_POST['mise'])*2;
          echo('<div class="resultat"><img class="jeu" src="../images/valide.png" alt="validé"></img>
            <p class="test">Vous pensiez que le résultat serait '.$_POST['parite'].' et le '.$resultat.' a été tiré. Bravo, vous gagnez: '.($_POST['mise']*2).'</p></div>');
          include('../view/roulette.php');
        }
        else {
          echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
          <p class="test">Vous pensiez que le résultat serait '.$_POST['parite'].' mais le '.$resultat.' a été tiré,vous avez perdu</p></div>');
          $Profit=0;
          include('../view/roulette.php');
        }
      }

      else {
        echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Choisissez votre mode de pari</p></div>');
        include('../view/roulette.php');
      }
      $game->addJeu($Profit,$_POST['mise']);
      $utilisateur1->MAJmoney($_SESSION['argent'],$_POST['mise'],$Profit,$_SESSION['user']);
    }
  }
  else {
    echo('<div class="resultat"><img class="jeu" src="../images/perdu.png" alt="validé"></img>
    <p class="test">Vous n\'avez rien misé</p></div>');
    include('../view/roulette.php');
  }
}
