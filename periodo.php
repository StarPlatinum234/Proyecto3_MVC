<!-- models/periodo.php -->
<?php  
class Periodo extends base {
protected $table = 'periodo';

private $id_periodo;
private $periodo;

public function __construct($data = null) {
    parent::__construct();
    if ($data) {
    $this->hydrate($data);
            }
        }
    }

//GETTER id_periodo
public function getid_periodo($id_periodo) {
$this->id_periodo = $id_periodo;
}
//SETTER id_periodo
public function setid_periodo($id_periodo) {
$this->id_periodo = $id_periodo;
}

//GETTER periodo
public function getperiodo($periodo) {
    $this->periodo = $periodo;
    }
//SETTER periodo
public function setid_periodo($periodo) {
    $this->periodo = $periodo;
    }
?>