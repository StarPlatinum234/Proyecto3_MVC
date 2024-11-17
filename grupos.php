<!-- models/grupos.php -->
<?php 
class Grupos extends base {
protected $table = 'grupos';

private $idgrupo;
private $idespecialidad;
private $semestre;
private $grupo;
private $turno;

public function __construct($data = null) {
    parent::__construct();
    if ($data) {
    $this->hydrate($data);
            }
        }
    }

//GETTER idgrupo
public function getidgrupo($idgrupo){
$this->idgrupo = $idgrupo;
}
//SETTER idgrupo
public function setidgrupo($idgrupo){
$this->idgrupo = $idgrupo;
}

//GETTER idespecialidad
public function getidespecialidad($idespecialidad){
$this->idespecialidad = $idespecialidad;
}
//SETTER idespecialidad
public function setidespecialidad($idespecialidad){
$this->idespecialidad = $idespecialidad;
}

//GETTER semestre
public function getsemestre($semestre){
$this->semestre = $semestre
}
//SETTER semestre
public function setsemestre($semestre){
$this->semestre = $semestre
}

//GETTER grupo 
public function getgrupo($grupo){
$this->grupo = $grupo;
}
//SETTER grupo
public function setgrupo($grupo){
$this->grupo = $grupo;
}

//GETTER turno
public function getturno($turno){
$this->turno = $turno;
}
//SETTER turno
public function setturno($turno){
$this->turno = $turno;
}
?>