<?php

    class Coche{
        private $matricula;
        private $marca;
        private $carga;

        //constructor 
        public function __construct($matricula,$marca,$carga){
            $this->matricula=$matricula;
            $this->marca=$marca;
            $this->carga=$carga;
        }

        //getters y setters 
        public function getMatricula(){
            return $this->matricula;
        }   
        public function getMarca(){
            return $this->marca;
        }
        public function getCarga(){
            return $this->carga;
        }

        public function setMatricula($matricula){
            $this->matricula=$matricula;
        }
        public function setMarca($marca){
            $this->marca=$marca;
        }
        public function setCarga($carga){
            $this->carga=$carga;
        }
        //to String

        public function pintarInfo(){
            return "Matricula: " . $this->matricula . ", marca: " . $this->marca . " Carga: " . $this->carga;
        } 
    }
?>