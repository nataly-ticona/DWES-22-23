<?php
    class CuentaBancaria{
        //Debes utilizar elementos estáticos $contador, asi se guardan los valores automaticamente 
        private static $contador=100001; 
        private $numeroCuenta;
        private $nombre;
        private $saldo=0;

        //constructor con todos los parametros
        public function __construct($nombre='anonimo',$saldo=0){
            $this->numeroCuenta= self::$contador++;
            $this->nombre=$nombre;
            $this->saldo=$saldo;
            
        }

        //getters y setters
        public function getCuenta(){
            return $this->numeroCuenta;
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

        public function setCuenta($numeroCuenta){
            $this->numeroCuenta=$numeroCuenta;
        }
        //funciones
        //ingresar
        public function ingresar(float $cantidad){
            $this->saldo+= $cantidad;
        }

        //retirar dinero
        public function retirar(float $cantidad){
            $this->saldo-= $cantidad;
        }

        //transferir dinero a la cuenta
        public function transferir($numeroCuenta, $cantidad){
            //restamos de su cuenta la cantidad, luego ingresamos en la cuenta del otro la cantidad
            $this->saldo=$this->saldo - $cantidad;
            $numeroCuenta->ingresar($cantidad);
        }

        public function bancarrota(){
            $this->saldo=0;
        }

        //unir
        public function unir($numeroCuenta){
            $this->saldo+=$numeroCuenta->getSaldo();
            $numeroCuenta->setSaldo(0);
            $numeroCuenta->setCuenta(-1);
        }

        public function __toString(){
            return "<div> <span> Numero cuenta:" . $this->numeroCuenta . "</span> <br><span> Nombre:" . $this->nombre . "</span><br><span> Salario:" . $this->saldo . "</span></div>";
            }
    }
?>
