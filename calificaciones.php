<!-- models/calificaciones.php -->
<?php
class Calificaciones extends base {
protected $table = 'calificaiones';

private $CURP;
private $IDALUMNO;
private $IDCALIFICA;
private $PARCIAL_1;
private $PARCIAL_2;
private $PARCIAL_3;
private $CALIFICACION;
private $IDPERIODO;
private $PERIODO;
private $FIRMADO;
private $FIRMA;
private $ASISTENCIA_1;
private $ASISTENCIA_2;
private $ASISTENCIA_3;
private $TOTAL_ASISTENCIA;
private $TIPO_ACREDITACION;

public function __construct($data = null) {
parent::__construct();
if ($data) {
$this->hydrate($data);
        }
    }
}

public function getAsistenciasPorGrupo($idGrupo) {
    $sql = "SELECT c.*, a.nombre FROM calificaciones c 
            JOIN alumnos a ON c.IDALUMNO = a.IDALUMNO 
            WHERE a.idGrupo = :idGrupo";
    return $this->query($sql, array(':idGrupo' => $idGrupo));
}

//Getters y setters

//GETTER CURP
public function getCURP($CURP){
    $this->CURP = $CURP; 
}
//SETTER CURP 
public function setCURP($CURP){
    $this->CURP = $CURP;
}

//GETTER IDALUMNO
public function getIDALUMNO($IDALUMNO){
    $this->IDALUMNO = $IDALUMNO;
}
//SETTER IDALUMNO
public function setIDALUMNO($IDALUMNO){
    $this->IDALUMNO = $IDALUMNO;

//GETTER IDCALIFICA
public function getIDCALIFICA($IDCALIFICA){
    $this->IDCALIFICA = $IDCALIFICA;
}
//SETTER IDCALIFICA
public function setIDCALIFICA($IDCALIFICA){
    $this->IDCALIFICA = $IDCALIFICA;
}

//GETTER PARCIAL_1
public function getPARCIAL_1($PARCIAL_1){
    $this->PARCIAL_1 = $PARCIAL_1;
}
//SETTER PARCIAL_1
public function setPARCIAL_1($PARCIAL_1){
    $this->PARCIAL_1 = $PARCIAL_1;
}

//GETTER PARCIAL_2
public function getPARCIAL_2($PARCIAL_2){
    $this->PARCIAL_2 = $PARCIAL_2;
}
//SETTER PARCIAL_2
public function setPARCIAL_2($PARCIAL_2){
    $this->PARCIAL_2 = $PARCIAL_2;
}

//GETTER PARCIAL_3
public function getPARCIAL_3($PARCIAL_3){
    $this->PARCIAL_3 = $PARCIAL_3;
}
//SETTER PARCIAL_3
public function setPARCIAL_3($PARCIAL_3){
    $this->PARCIAL_3 = $PARCIAL_3;
}

//GETTER CALIFICACION
public function getCALIFICACION($CALIFICACION){
    $this->CALIFICACION = $CALIFICACION;
}
//SETTER CALIFICACION
public function setCALIFICACION($CALIFICACION){
    $this->CALIFICACON = $CALIFICACION;
}

//IDPERIODO
public function getIDPERIODO($IDPERIODO){
    $this->IDPERIODO = $IDPERIODO;
}
//SETTER IDPERIODO
public function setIDPERIODO($IDPERIODO){
    $this->IDPERIODO = $IDPERIODO;
}

//GETTER FIRMADO
public function getFIRMADO($FIRMADO){
    $this->FIRMADO = $FIRMADO;
}
//SETTER FIRMADO
public function setFIRMADO($FIRMADO){
    $this->FIRMADO = $FIRMADO;
}

//GETTER FIRMA
public function getFIRMA($FIRMA){
    $this->FIRMA = $FIRMA;
}
//SETTER FIRMA
public function getFIRMA($FIRMA){
    $this->FIRMA = $FIRMA;
}

//GETTER ASISTENCIAS_1
public function getASISTENCIAS_1($ASISTENCIAS_1){
    $this->ASISTENCIAS_1 = $ASISTENCIAS_1
}
//SETTER ASISTENCIAS_1
public function setASISTENCIAS_1($ASISTENCIAS_1){
    $this->ASISTENCIAS_1 = $ASISTENCIAS_1
}

//GETTER ASISTENCIAS_2
public function getASISTENCIAS_2($ASISTENCIAS_2){
    $this->ASISTENCIAS_2 = $ASISTENCIAS_2
}
//SETTER ASISTENCIAS_2
public function setASISTENCIAS_2($ASISTENCIAS_2){
    $this->ASISTENCIAS_2 = $ASISTENCIAS_2
}

//GETTER ASISTENCIAS_3
public function getASISTENCIAS_3($ASISTENCIAS_3){
    $this->ASISTENCIAS_3 = $ASISTENCIAS_3
}
//SETTER ASISTENCIAS_3
public function setASISTENCIAS_3($ASISTENCIAS_3){
    $this->ASISTENCIAS_3 = $ASISTENCIAS_3
}

//GETTER TOTAL_ASISTENCIAS
public function getTOTAL_ASISTENCIAS($TOTAL_ASISTENCIAS){
    $this->TOTAL_ASISTENCIAS = $TOTAL_ASISTENCIAS
}
//SETTER TOTAL_ASISTENCIAS
public function setTOTAL_ASISTENCIAS($TOTAL_ASISTENCIAS){
    $this->getTOTAL_ASISTENCIAS = $TOTAL_ASISTENCIAS
}

//GETTER TIPO_ACREDITACION
public function getTIPO_ACREDITACION($TIPO_ACREDITACION){
$this->TIPO_ACREDITACION = $TIPO_ACREDITACION
}
//SETTER TIPO_ACREDITACION
public function setTIPO_ACREDITACION($TIPO_ACREDITACION){
    $this->TIPO_ACREDITACION = $TIPO_ACREDITACION
}

?>