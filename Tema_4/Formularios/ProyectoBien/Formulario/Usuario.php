<?php
namespace Formulario;
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
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre=$nombre;}

    public function getApellido(){return $this->apellido;}
    public function setApellido($apellido){$this->apellido=$apellido;}

    public function getCorreo(){return $this->correo;}
    public function setCorreo($correo){$this->correo=$correo;}

    public function getPsswd(){return $this->psswd;}
    public function setPsswd($psswd){$this->psswd=$psswd;}

}
?>