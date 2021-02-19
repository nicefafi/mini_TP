<?php

  require_once('DTO_Roulette.php');

  /***
   * Class DAO_player
   */
  class DAO_player {

    private $bdd;
    private $host;
    private $usr;
    private $pass;

    /***
     * DAO_player constructor.
     * Connexion DB.
     */
    public function __construct() {
      $this->host = 'iutdoua-ora.univ-lyon1.fr';
      $this->bdd ='p1909642';
      $this->usr = 'p1909642';
      $this->pass = '449715';
      try {
        $this->bdd = new PDO('mysql:dbname='.$this->usr.';host='.$this->host.';charset=utf8',
          $this->usr, $this->pass);
      }
      catch(Exception $e) {
        die('ERROR : '. $e->getMessage());
      }
    }

    /***
     * @param $argent
     * @param $mise
     * @param $profit
     * @param $user
     */
    public function MAJmoney($argent,$mise,$profit,$user){
      $argent=$argent-$mise;
      $argent=$argent+$profit;
      $requeteMajmoney='UPDATE player SET money=? where name=?';
      $reqMajmoney= $this->bdd->prepare($requeteMajmoney);
      $reqMajmoney->execute(array($argent,$user));
    }

    /***
     * Function register.
     */
    public function inscription(){
      if(isset($_POST['bouton_inscription'])){
        if(isset($_POST['username']) && $_POST['username'] != ''){
          if(isset($_POST['password']) && $_POST['password'] != ''){
            if(isset($_SESSION['user'])){
              unset($_SESSION['user']);
              unset($_SESSION['argent']);
            }
            echo 'test';
            $_SESSION['user'] = htmlspecialchars($_POST['username']);
            $_SESSION['argent'] = 0;
            $requeteIns='INSERT INTO player (name,password) values (:V_nomU,:V_PassW)';
            $reqIns= $this->bdd->prepare($requeteIns);
            $reqIns->execute(array(
              'V_nomU'=> htmlspecialchars($_POST['username']),
              'V_PassW'=>htmlspecialchars($_POST['password'])));

            header('Location: ../controller/controller.php?test');
          }
          else {
            header('Location: ../controller/controller.php?InsMdp&inscriptionfail');
          }
        }
        else {
          header('Location: ../controller/controller.php?InsUser&inscriptionfail');
        }
      }
    }

    /***
     * @param $user
     * @param $password
     */
    public function connexion($user,$password){
      if ( $user != '' && $password!='') {
        $requeteNomU='SELECT * FROM player where name=?';
        $reqNomU= $this->bdd->prepare($requeteNomU);

        $reqNomU->execute(array($user));
        $data=$reqNomU->fetch();

        $ResN=$data['name'];
        $ResP=$data['password'];

        if (($user)  == $ResN) {
          if(($password) == $ResP) {
            $_SESSION['argent']= $data['money'];
            $_SESSION['user']=$user;
            header('Location: ../controller/controller.php?co');
          }
          else {
            header('Location: ../controller/controller.php?BadPassw');
          }
        }
        else {
          header('Location: ../controller/controller.php?BadId');
        }
      }
      else {
        header('Location: ../controller/controller.php?Bad');
      }
    }

    /***
     * @param $id
     * @return player
     */
    public function getById($id) {
      $sql = "SELECT * FROM player where id=?";
      $req = $this->bdd->prepare($sql);
      $req->execute(array($id));

      while($data = $req->fetch()) {
        $a = new player($data['name'],$data['password']);
      }
      return $a;
    }
  }

