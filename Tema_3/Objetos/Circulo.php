<?php
    class Circulo{
        private $radio;
        private const PI=M_PI;

        public function getRadio():float{
            return $this->radio;
        }
        public function setRadio(float $valor){
            $this->radio = $valor;
        }

        public function getPI(){
            return self::PI;
        }

        //funciones
        public function getArea():float{
            return self::PI * $this->radio * $this->radio;
        }
    }
?>