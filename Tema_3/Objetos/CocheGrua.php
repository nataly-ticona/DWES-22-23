<?php
    class CocheGrua extends Coche{
        private $cocheCargado;
        
        public function __construct($matricula,$marca,$carga,$cocheCargado=null){
            parent::__construct($matricula,$marca,$carga); 
            $this->cocheCargado=$cocheCargado;   
        }

        public function getCargado(){
            return $this->cocheCargado;
        }

        public function setCargado($cocheCargado){
            $this->cocheCargado=$cocheCargado;
        }

        //metodos
        public function cargar($coche){
            $this->cocheCargado = $coche;
        }

        public function descargar(){
            $this->cocheCargado=null;
        }

        public function pintarInfo(){
            if ($this->cocheCargado!=null ) {
                return  parent::pintarInfo() . " y lleva: ". $this->cocheCargado;
            }else{
                return  parent::pintarInfo() . " y no lleva ningun coche";
            }
        } 
    }
?>