<!-- models/planteles.php -->
<?php
class Planteles extends base{
	protected $table = 'planteles';

	private $idplantel;
	private $centro;
	private $plantel;

	public function __construct($data = null) {
		parent::__construct();
		if ($data) {
		$this->hydrate($data);
				}
			}
}

//GETTER idplantel
public function getidplantel($idplantel){
$this ->idplantel = $idplantel;
}
//SETTER idplantel
public function setidplantel($idplantel){
$this->idplantel = $idplantel;
}

//GETTER centro
public function getcentro($centro){
$this ->centro = $centro;
}
//SETTER centro
public function setcentro($centro){
$this->centro = $centro;
}

//GETTER plantel
public function getplantel($plantel){
$this ->plantel = $plantel;
}
//SETTER plantel
public function setplantel($plantel){
$this -> plantel = $plantel;
}

?>