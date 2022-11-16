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
            $this->errores['nombre']='Nombre vacio';
        }else if(!preg_match("/[A-Za-z]/",$this->nombre)){
            $this->errores['nombre']='No has escrito bien el nombre';
        }

        if(isset($this->apellido) && $this->apellido == ""){
            $this->errores['apellido']='Apellido vacio';
        }else if(!preg_match("/[A-Za-z]/",$this->nombre)){
            $this->errores['apellido']='No has escrito bien el apellido';
        }

        if(isset($this->correo) && $this->correo == ""){
            $this->errores['correo']='Correo vacio';
        }else if(filter_var($this->correo,FILTER_VALIDATE_EMAIL)==FALSE){
            $this->errores['correo']='No has escrito bien el correo';}

        if(isset($this->psswd) && $this->psswd == ""){
            $this->errores['psswd']='Contraseña vacia';
        }else{//convertimos la contraseña en un hash para no saber cual es
            $this->psswd = password_hash($this->psswd,PASSWORD_DEFAULT);
        }

        $data = file_get_contents("usuarios.csv");
        $lines = explode("\n", $data);
    
        $correos=[];
    
        foreach ($lines as $n) {
            $fields = explode(";" ,$n);
            array_push($correos, $fields[2]);
        }
        for ($i=0; $i < sizeof($correos) ; $i++) { 
            if ($correos[$i]==$this->correo) {
                $this->errores['correo']='el correo ya esta en uso';
            } 
        }
        return $this->errores;
    }

    //validar datos no repetidos como el correo para mandarlos al csv 
    function esValido(){
        
        print_r($this->correo);
        if(isset($this->errores['nombre'])){echo '<p class="error">'.$this->errores['nombre']. '</p>';}
            if(isset($this->errores['apellido'])){echo '<p class="error">'.$this->errores['apellido'] . '</p>';}
            if(isset($this->errores['correo'])){echo '<p class="error">'.$this->errores['correo']. '</p>';}
            if(isset($this->errores['psswd'])){echo '<p class="error">'.$this->errores['psswd']. '</p>';}
        
    }
}
?>