<!-- models/materias.php -->
<?php  
class Materias extends base {
protected $table = 'materia';

private $idmateria;
private $nombre;

public function __construct($data = null) {
    parent::__construct();
    if ($data) {
    $this->hydrate($data);
            }
        }
    }
    
    //GETTER idmateria
    public function getIdmateria($idmateria) {
    $this->idmateria = $idmateria;
    }
    //SETTER idmateria
    public function setIdmateria($idmateria) {
    $this->idmateria = $idmateria;
    }
    
    //GETTER nombre
    public function getNombre($nombre) {
    $this->nombre = $nombre
    }
    //SETTER nombre
    public function setNombre($nombre) {
    $this->nombre = $nombre
    }
?>