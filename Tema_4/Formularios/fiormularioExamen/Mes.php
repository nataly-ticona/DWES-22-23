<?php
trait Mes{
    private $mes;

    function getMes(){
        return  $this->mes;
    }
    function setMes($mes){
        $this->mes=$mes;
    }
}
?>