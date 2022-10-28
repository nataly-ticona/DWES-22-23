<?php
class Config{
    public $nombre;

    public function getNombre(){return $this->nombre . ' ';}
    public function setNombre($nombre){$this->nombre=$nombre;}

    private static $instance;

    // The singleton method
    public static function singleton(){
        if (!isset(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    private function __construct() {}

}
$prueba=Config::singleton();
$prueba->nombre='cambio en objeto'; //le damos un valor

?>