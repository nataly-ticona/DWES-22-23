<?php

class Validacion{

    //expresiones
    //array global que se llama en toda la clase
    private static $errores = [];

    //validaciones de datos
    public static function validarNombre($dato){
        if(isset($dato) && $dato == ""){
            self::$errores['nombre']='Nombre vacio'; 
        }else if(!preg_match("/[A-Za-z]/",$dato)){
            self::$errores['nombre']='No has escrito bien el nombre';
        }
        return $dato;
    }

    public static function validarApellido($dato){
        if(isset($dato) && $dato == ""){
            self::$errores['apellido']='Apellido vacio';
        }else if(!preg_match("/[A-Za-z]/",$dato)){
            self::$errores['apellido']='No has escrito bien el apellido';
        }
        return $dato;
    }

    public static function validarCorreo($dato){
        if(isset($dato) && $dato == ""){
            self::$errores['correo']='Correo vacio';
        }else if(filter_var($dato,FILTER_VALIDATE_EMAIL)==FALSE){
            self::$errores['correo']='No has escrito bien el correo';
        }

        //validacion de correo no repetido
        $texto = file_get_contents("usuarios.csv"); //obtenemos los datos del csv
        $lines = explode("\n", $texto); //separamos por lineas
        $correos=[]; //array donde se guardaran los correos 
    
        foreach ($lines as $n) { 
            $fields = explode(";" ,$n);
            array_push($correos, $fields[2]); //guardamos los correos en el array
        }
        for ($i=0; $i < sizeof($correos) ; $i++) { 
            if ($correos[$i]==$dato) {
                self::$errores['correo']='El correo ya esta en uso';
            } 
        }
        return $dato;
    }

    public static function validarPsswd($dato){
        if(isset($dato) && $dato == ""){
            self::$errores['psswd']='Contraseña vacia';
        }else{
            //convertimos la contraseña en un hash para no saber cual es
            $dato = password_hash($dato,PASSWORD_DEFAULT);
        }
        return $dato;
    }

    public static function validarTelefono($dato){
        if(isset($dato) && $dato == ""){
            self::$errores['telefono']='Telefono esta vacio';
        }else if(!preg_match("/[69]{1}[0-9]{8}/",$dato)){
            self::$errores['telefono']='El telefono tiene que empezar por 6 o 9 y luego 8 numeros';
        }
        return $dato;
    }

    public static function validarGenero($dato){
        if(isset($dato) && $dato==""){
            self::$errores['genero']='Selecciona un genero';
        }
        return $dato;
    }

    public static function validarDia($dato){
        if(isset($dato) && $dato== ""){
            self::$errores['dia']='Dia esta vacio';
        }else if($dato<1 || $dato>31){
            self::$errores['dia']='La fecha tiene que ser entre 1 y 31';
        }else if($dato=='febrero' && $dato>28){
            self::$errores['dia']='Febrero no tiene tantos dias';
        }
        return $dato;
    }

    public static function validarMes($dato){
        if(isset($dato) && $dato== ""){
            self::$errores['mes']='mes esta vacio';
        }
        return $dato;
    }

    public static function validarAnio($dato){
        if(isset($dato) && $dato== ""){
            self::$errores['anio']='anio esta vacio';
        }else if($dato<1940 || $dato>2004){
            self::$errores['anio']='año no correcto';
        }
        return $dato;
    }

    //mandamos el array de errores
    public static function getErrors(){
        return self::$errores;
    }
}

?>