<?php 
abstract class AExamen implements IExamen{
    private $nombre;
    use TieneFecha;
    
    public function intentar($nombre){
        $this->nombre=$nombre;
    }
}
?>