<!-- models/alumno.php -->
<?php
class Alumno extends base {
    protected $table = 'alumnos';
    
    private $idalumno;
    private $appat;
    private $apmat;
    private $nombre;
    private $curp;
    private $nocontrol;
    private $idgeneracion;
    
    public function __construct($data = null) {
        parent::__construct();
        if ($data) {
            $this->hydrate($data);
        }
    }

        //Getters y setters
        
        //GET IDALUMNO
        public function getIdAlumno() {
        $this->idalumno = $this->idalumno;
        }
        
        //SET IDALUMNO
        public function setIdAlumno($idalumno) {
        $this->idalumno = $idalumno;
        }
        
        //GET APPATP
        public function getappatp($appatp) {
            $this->appatp = $appatp;
        }
        //SET APPATP
        public function setappatp($appatp) {
            $this->appatp = $appatp;
        }

        //GET APMAT
        public function getapmat($apmat){
            $this->appatp = $apmat;
        }
        
        //SET APMAT
        public function setapmat($apmat){
        $this->apmat = $apmat;
        }
        
        //GET NOMBRE 
        public function getnombre($nombre){
        $this->nombre = $nombre;
        }
        
        //SET NOMBRE 
        public function setnombre($nombre){
        $this->nombre = $nombre;
        }
        
        //GET CURP
        public function getcurp($curp){
        $this->curp = $curp;
        }
        
        //SET CURP
        public function setcurp($curp){
        $this->curp = $curp;
        }
        
        //GET nocontrol
        public function getnocontrol($nocontrol){
        $this->nocontrol = $nocontrol;
        }
        
        //SET nocontrol
        public function setnocontrol($nocontrol){
        $this->nocontrol = $nocontrol;
        }
        
        //GET IDGENERACION 
        public function getidgeneracion($idgeneracion){
        $this->idgeneracion = $idgeneracion;
        }
        
        //SET IDGENERACION
        public function setidgeneracion($idgeneracion){
        $this->idgeneracion = $idgeneracion;
        }
    }
    ?>