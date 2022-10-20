<?php
    class CuentaBancario{
        //Debes utilizar elementos estáticos
        private $numeroCuenta;
        private $nombre='anonimo';
        private $saldo=0;

        //constructor por defecto
        public function __construct($numeroCuenta,$nombre,$saldo){
            $this->numeroCuenta=$numeroCuenta;
            $this->nombre=$nombre;
            $this->saldo=$saldo;
        }

        //getters y setters
        public function getNumeroCuenta(){
            return $this->numeroCuenta;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function getSaldo(){
            return $this->floatval(saldo);
        }

        public function setNumeroCuenta($numeroCuenta){
            $this->numeroCuenta = $numeroCuenta;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function setSaldo(){
            $this->saldo=$saldo;
        }

        //funciones
            //retirar dinero
            public function retirar($cantidad){
                $saldo=$saldo-floatval($cantidad);
                return $cantidad;
            }




    }
?>
