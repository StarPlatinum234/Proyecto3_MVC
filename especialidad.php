<!-- models/especialidad.php -->
<?php
class Especialidad extends base {
protected $table = 'especialidad';

private $idespecialidad;
private $nombre;

public function __construct($data = null) {
    parent::__construct();
    if ($data) {
    $this->hydrate($data);
            }
        }
    }


//GETTER idespecialidad
public function getidestpecialidad($idespecialidad) {
$this->idespecialidad = $idespecialidad;
}
//SETTER idespecialidad
public function setidestpecialidad($idespecialidad) {
$this->idespecialidad = $idespecialidad;
}

//GETTER nombre
public function getnombre($nombre) {
$this->nombre = $nombre
}
//SETTER nombre
public function setnombre($nombre) {
$this->nombre = $nombre
}
?>