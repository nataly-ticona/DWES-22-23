<?php
class CocheRemolque extends Coche{
    private $capacidad;
    
    public function __construct($matricula, $marca, $carga, $capacidad){
        $this->capacidad = $capacidad;
        parent::__construct($matricula, $marca, $carga);
    }


    public function getCapacidad(){return $this->capacidad; }
    public function setCapacidad($capacidad){$this->capacidad = $capacidad;}

    public function pintarInfo(){
        parent::pintarInfo(); ?>
            <span> y remolque <?=$this->capacidad ?></span>     
        <?php
    }
}
?>