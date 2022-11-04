<?php
trait Apellido{
    private $apellido;
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
}
?>