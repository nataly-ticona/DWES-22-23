<?php
trait Telefono{
    private $telefono;

    function getTelefono(){
        return  $this->telefono;
    }
    function setTelefono($telefono){
        $this->telefono=$telefono;
    }
}
?>