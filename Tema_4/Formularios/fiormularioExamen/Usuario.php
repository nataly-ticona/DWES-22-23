<?php

class Usuario{
    public static $errores=[];
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

    //validar los datos y los datos del formularios 
    public function validar(){
        
        if(isset($this->nombre) && $this->nombre == ""){
            $this->errores['nombre']='nombre vacio';
        }else if(!preg_match("/[A-Za-z]/",$this->nombre)){
            $this->errores['nombre']='no has escrito bien el nombre';
        }

        if(isset($this->apellido) && $this->apellido == ""){
            $this->errores['apellido']='apellido vacio';
        }else if(!preg_match("/[A-Za-z]/",$this->nombre)){
            $this->errores['apellido']='no has escrito bien el apellido';
        }

        if(isset($this->correo) && $this->correo == ""){
            $this->errores['correo']='correo vacio';
        }else if(filter_var($this->correo,FILTER_VALIDATE_EMAIL)==FALSE){
            $this->errores['correo']='no has escrito bien el apellido';}

        if(isset($this->psswd) && $this->psswd == ""){
            $this->errores['psswd']='contraseña vacia';
        }else{//convertimos la contraseña en un hash para no saber cual es
            $this->psswd= password_hash($this->psswd,PASSWORD_DEFAULT);
        }
        return $this->errores;
    }

    //validar datos no repetidos como el correo para mandarlos al csv 
    function esValido(){
        if(isset($this->errores['nombre'])){echo $this->errores['nombre']. '<br>';}
            if(isset($this->errores['apellido'])){echo $this->errores['apellido'] . '<br>';}
            if(isset($this->errores['correo'])){echo $this->errores['correo']. '<br>';}
            if(isset($this->errores['psswd'])){echo $this->errores['psswd']. '<br>';}
        
    }
}
?>