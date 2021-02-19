<?php
  /***
   * Class DAO_game
   */
  class DAO_game {

    private $bdd;
    private $host;
    private $usr;
    private $pass;

    /***
     * DAO_game constructor.
     */
    public function __construct() {
      $this->host = 'iutdoua-web.univ-lyon1.fr';
      $this->bdd ='p1920273';
      $this->usr = 'p1920273';
      $this->pass = '466659';
      try {
        $this->bdd = new PDO('mysql:dbname='.$this->usr.';host='.$this->host.';charset=utf8',
          $this->usr, $this->pass);
      } catch(Exception $e) {
        die('ERROR : '. $e->getMessage());
      }
    }

    /***
     * @param $profit
     * @param $mise
     */
    public function addJeu($profit,$mise){
      $requeteID='SELECT id FROM player where name=?';
      $reqID= $this->bdd->prepare($requeteID);
      $temps=date("Y-m-d H:i:s");
      $reqID->execute(array($_SESSION['user']));
      $id=$reqID->fetch()['id'];
      $requeteGame='INSERT INTO Game VALUES (?,?,?,?)';
      $reqGame= $this->bdd->prepare($requeteGame);
      $reqGame->execute(array($id,$temps,$mise,$profit));
    }

    /***
     * @param $id
     * @return game
     */
    public function getById($id) {
      $sql = "SELECT * FROM game where id=?";
      $req = $this->bdd->prepare($sql);
      $req->execute(array($id));
      while($data = $req->fetch()) {
        $a = new game($data['name'],$data['password']);
      }
      return $a;
    }
  }
