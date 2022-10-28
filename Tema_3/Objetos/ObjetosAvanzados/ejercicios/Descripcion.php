<?php
trait Descripcion{
    private $des;
    public function getDescripcion(){
        return $this->des;
    }
    public function setDescripcion($des){
        $this->des=$des;
    }
    
}
?>