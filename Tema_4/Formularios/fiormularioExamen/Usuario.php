<?php
class Usuario{
    private $nombre;
    private $apellido;
    private $correo;
    private $psswd;

    function __construct(String $nombre,String $apellido, String $correo,String $psswd){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->psswd=$psswd;
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function getApellido(){
        return $this->apellido;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }

    function getCorreo(){
        return $this->correo;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }

    function getPsswd(){
        return $this->psswd;
    }
    function setPsswd($psswd){
        $this->psswd=$psswd;
    }


}
?>