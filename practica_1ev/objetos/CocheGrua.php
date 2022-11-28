<?php
class CocheGrua extends Coche{
    private $cocheCargado;

    public function __construct($matricula, $marca, $carga, $cocheCargado=null){

        parent::__construct($matricula, $marca, $carga);
        $this->cocheCargado = $cocheCargado;
    }

    public function cargar( $coche){
        $this->cocheCargado = $coche ;
    }

    public function descargar(){
        $this->cocheCargado=null;
    }

    public function pintarInfo(){
        parent::pintarInfo(); ?>
            <span> <?=$this->cocheCargado ?></span>     
        <?php
    }
}
?>