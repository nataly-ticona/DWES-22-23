<?php
    class CuentaBancaria{
        //Debes utilizar elementos estáticos
        private static $numeroCuenta=100001;
        private $nombre;
        private $saldo=0;

        //constructor con todos los parametros
        public function __construct(){
            $this->numeroCuenta++;
            $this->nombre='anonimo';
            $this->saldo=0;
        }

        //getters y setters
        public function getCuenta(){
            return self::$numeroCuenta++;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function getSaldo(){
            return $this->saldo;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function setSaldo(){
            $this->saldo=$saldo;
        }

        //funciones
            //ingresar
            public function ingresar(float $cantidad){
                $saldo=$saldo + $cantidad;
            }

            //retirar dinero
            public function retirar(float $cantidad){
                $saldo=$saldo - $cantidad;
                return $cantidad;
            }

            //transferir dinero a la cuenta
            public function transferir($cuenta, $cantidad){

            }


    }
?>
