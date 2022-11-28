<?php

class Usuario{
    private $nombre;
    private $apellido;
    private $correo;
    private $psswd;

    //constructor
    function __construct( $nombre, $apellido, $correo, $psswd){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->psswd=$psswd;
    }

    //getters y setters
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
        //nombramos los metodos de la clase Validacion para ver errores de los datos enviados 
        $this->nombre=Validacion::validarNombre($this->nombre);
        $this->apellido=Validacion::validarApellido($this->apellido);
        $this->correo=Validacion::validarCorreo($this->correo);
        $this->psswd=Validacion::validarPsswd($this->psswd);
    }

}
?>