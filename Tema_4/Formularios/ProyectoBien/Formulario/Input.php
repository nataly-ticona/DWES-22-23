<?php
namespace Formulario;

abstract class Input{
    //protected para que se pueda acceder a esta 
    protected $tipo;
    protected $nombre;
    protected $placeHolder;
    protected $dato;
    protected $regex;
    public static $errores=[];
    public static $inputs=[];

    public function __construct($nombre, $placeholder = null, $dato = null, $regex = null) {
        $this->nombre = $nombre;
        $this->placeholder = $placeholder;
        $this->dato = $dato;
        $this->regex = $regex;
        self::$inputs[] = $this;
    }

    public function getTipo(){ return $this->tipo; }
    public function getNombre(){ return $this->nombre; }
    public function getPlaceHolder(){ return $this->placeHolder; }
    public function getDato(){ return $this->dato; }
    public function getRegex(){ return $this->regex; }
    public function getErrores() { return self::$errores; }

    //FUNCIONES 
    protected function cleanData(&$dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato, ENT_QUOTES, "UTF-8");
    }

    abstract public function pintarInput();


    protected function validar(){
        self::cleanData($this->dato);
        if(empty($this->dato)){
            //ucfirst es para poner la primera letra de la cadena en mayusculas
            self::$errores[$this->nombre] = ucfirst($this->nombre) . ' no puede estar vacío.';
        }
    }

    public static function pintarFormulario(){
        $lista = Personal::crearInputs(); //tofos los objetos con su tipo de inputs
        foreach ($lista as $inputs) { ?>
            <fieldset class="form__fieldset">
                <legend class="form__fieldset-title">
                    Datos del usuario
                </legend>
                <?php foreach ($inputs as $input) {
                    $input->pintarInput();
                } ?>
            </fieldset>
        <?php }
    }
}
?>