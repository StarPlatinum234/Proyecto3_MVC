<!-- models/generacion.php -->
<?php
class Generacion extends base {
protected $table = 'generacion';

private $idgeneracion;
private $generacion;

public function __construct($data = null) {
    parent::__construct();
    if ($data) {
    $this->hydrate($data);
            }
        }
    }
    
    //GETTER idgeneracion
    public function getidgeneracion($idgeneracion) {
    $this->idgeneracion = $idgeneracion;
    }
    //SETTER idgeneracion
    public function setidgeneracion($idgeneracion) {
    $this->idgeneracion = $idgeneracion;
    }
    
    //GETTER generacion
    public function getgeneracion($generacion) {
    $this->generacion = $generacion;
    }
    //SETTER generacion
    public function setgeneracion($generacion) {
    $this->generacion = $generacion;
    }
    
?>