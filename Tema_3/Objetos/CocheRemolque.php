<?php
    class CocheRemolque extends Coche{
        private $capacidad;

        public function __construct($matricula,$marca,$carga,$capacidad){
            parent::__construct($matricula,$marca,$carga); 
            $this->capacidad=$capacidad;   
        }

        public function getCapacidad(){
            return $this->capacidad;
        }

        public function setCapacidad($capacidad){
            $this->capacidad=$capacidad;
        }

        public function pintarInfo(){
            return  parent::pintarInfo() . " y remolque: ". $this->capacidad;
        } 
    }
?>