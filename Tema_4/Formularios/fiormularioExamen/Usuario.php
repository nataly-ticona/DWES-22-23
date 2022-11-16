<?php

class Usuario{
    private $nombre;
    private $apellido;
    private $correo;
    private $psswd;

    function __construct( $nombre, $apellido, $correo, $psswd){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->psswd=$psswd;
    }

    function getNombre(){return $this->nombre;}
    function setNombre($nombre){$this->nombre=$nombre;}

    function getApellido(){return $this->apellido;}
    function setApellido($apellido){$this->apellido=$apellido;}

    function getCorreo(){return $this->correo;}
    function setCorreo($correo){$this->correo=$correo;}

    function getPsswd(){return $this->psswd;}
    function setPsswd($psswd){$this->psswd=$psswd;}

    //validar los datos
    public function validar(){
        $errores=[];
        
        if(isset($this->nombre) && $this->nombre == ""){
            $errores['nombre']='nombre vacio';
        }
        if(isset($this->apellido) && $this->apellido == ""){
            $errores['apellido']='apellido vacio';
        }
        if(isset($this->correo) && $this->correo == ""){
            $errores['psswd']='correo vacio';
        }
        if(isset($this->psswd) && $this->psswd == ""){
            $errores['psswd']='contraseña vacia';
        }
        return $errores;
    }
    function esValido(){
        $erroresMatch=[];
        if(!preg_match("/[A-Z]{1}[a-z]{9}/",$this->nombre)){
            $erroresMatch['nombre']='no has escrito bien el nombre';
        }

    }
}
?>