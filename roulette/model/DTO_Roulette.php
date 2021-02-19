<?php

/***
 * Class player
 */
class player {

	private $id;
	private $name;
	private $password;
	private $money;

  /***
   * player constructor.
   * @param $nom
   * @param $mdp
   */
	public function __construct($nom,$mdp) {
		$this-> name=$nom;
		$this->password =$mdp;
		$this->money = 0;
		//ID est en Auto-increment sur PHPMYADMIN, il n'y a donc pas besoin d'en attribuer dans le constructeur.
	}

  /***
   * @param $attr
   * @return int
   */
	public function __get($attr) {
		switch($attr) {
			case 'name':
				return $this->name;
				break;
			case 'id':
				return $this->id;
				break;
			case 'money':
				return $this->money;
				break;
			case 'password':
				return $this->password;
				break;
			case 'nom':
				return $this->name;
				break;
			case 'identifiant':
				return $this->id;
				break;
			case 'argent':
				return $this->money;
				break;
			case 'MDP':
				return $this->password;
				break;
		}
	}

  /***
   * @param $attr
   * @param $val
   */
	public function __set($attr, $val) {
		switch($attr) {
			case 'name':
				$this->name=$val;
				break;
			case 'id':
				$this->id=$val;
				break;
			case 'money':
				$this->money=$val;
				break;
			case 'password':
				$this->password=$val; // A VALIDER AVEC PROF --> SECURITE?
				break;
			case 'nom':
				$this->name=$val;
				break;
			case 'identifiant':
				$this->id=$val;
				break;
			case 'argent':
				$this->money=$val;
				break;
			case 'MDP':
				$this->password=$val;
				break;
		}
	}
}

  /***
   * Class game
   */
	class game {

	private $player;
	private $date;
	private $bet;
	private $profit;

  /***
   * game constructor.
   * @param $pari
   * @param $profit
   * @param $joueur
   */
	public function __construct($pari, $profit, $joueur) {
		$this->bet=$pari;
		$this->profit=$profit;
		$this->player =$joueur;
		$this->date=date("Y-m-d H:i:s");
	}

  /***
   * @param $attr
   * @return false|string
   */
	public function __get($attr) {
		switch($attr) {
			case 'bet':
				return $this->bet;
				break;
			case 'profit':
				return $this->profit;
				break;
			case 'player':
				return $this->player;
				break;
			case 'date':
				return $this->date;
				break;
			case 'pari':
				return $this->bet;
				break;
			case 'joueur':
				return $this->player;
				break;
		}
	}

  /***
   * @param $attr
   * @param $val
   */
	public function __set($attr, $val) {
		switch($attr) {
			case 'bet':
				$this->bet=$val;
				break;
			case 'profit':
				$this->profit=$val;
				break;
			case 'player':
				$this->player=$val;
				break;
			case 'date':
				$this->date=$val;
				break;
			case 'pari':
				$this->bet=$val;
				break;
			case 'joueur':
				$this->player=$val;
				break;
		}
	}
}
