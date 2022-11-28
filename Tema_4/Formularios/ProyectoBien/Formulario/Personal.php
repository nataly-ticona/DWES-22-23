<?php
namespace Formulario;
class Personal extends Usuario{
    private $telefono;
    private $genero;
    private $fechaN;

    public static $lista=[]; 

    function __construct($datos){
        parent::__construct($datos['nombre'] ,$datos['apellido'], $datos['correo'],$datos['psswd']);
        $this->telefono=$datos['telefono'] ;
        $this->genero=$datos['genero'];
        $this->fechaN=$datos['fechaN'];
    }

    //getters y setters
    public function getTelefono(){return $this->telefono;}
    public function setTelefono($telefono){$this->telefono=$telefono;}
    
    public function getGenero(){return $this->genero;}
    public function setGenero($genero){$this->genero=$genero;}

    public function getFechaN(){ return $this->fechaN;}
    public function setFechaN($fechaN){ $this->fechaN = $fechaN;}


    //validar datos de la clase
    public static function crearInputs(){
        $nombreF = new InputText('nombre', 'nombre', parent::getNombre());
        $apellidoF = new InputText('apellido', 'apellido', parent::getApellido());
        $correoF = new InputEmail('correo', 'correo', parent::getCorreo());
        $psswdF = new InputPassword('password', 'password', parent::getPsswd());
        $telefonoF = new InputNumber('telefono', 'telefono', self::getTelefono());
        $generoF = new InputRadio('sexo', self::getGenero(), 'hombre', 'mujer');
        $fechaNF = new InputDate('fechaN', self::getFechaN());
        return self::$lista = [$nombreF, $apellidoF, $correoF, $psswdF, $telefonoF, $generoF, $fechaNF];
    }


    
}
?>