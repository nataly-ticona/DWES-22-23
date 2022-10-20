<?php
    class Circulo{
        private $radio;
        private const PI=M_PI;

        public function getRadio(){
            return $this->radio;
        }
        public function setRadio($radio){
            $this->radio = $radio;
        }

        public function getPI(){
            return $this::PI;
        }
    }
?>