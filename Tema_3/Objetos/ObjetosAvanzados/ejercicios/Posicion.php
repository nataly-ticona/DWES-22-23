<?php

trait Posicion{
    private $x;
    private $y;
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y=$y;
    }
}
?>