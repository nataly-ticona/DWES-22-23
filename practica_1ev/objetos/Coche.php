<?php
class Coche{
    private $matricula;
    private $marca;
    private $carga;

    public function __construct($matricula, $marca, $carga){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->carga = $carga;
    }
    
    public function getMatricula(){return $this->matricula;}
    public function setMatricula($matricula){$this->matricula = $matricula;}

    public function getMarca(){return $this->marca;}
    public function setMarca($marca){$this->marca = $marca;}

    public function getCarga(){return $this->carga;}
    public function setCarga($carga){$this->carga = $carga;}

    public function pintarInfo(){?>
        <p>Matricula <?=$this->matricula?>, marca <?=$this->marca?> con carga: <?=$this->carga?></p>
    <?php }
}
?>