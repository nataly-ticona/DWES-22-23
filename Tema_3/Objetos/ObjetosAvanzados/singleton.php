<?php
/** Example taken from http://www.webgeekly.com/tutorials/php/how-to-create-a-singleton-class-in-php/ **/
class Unico{
    public $configuracion;

    // Hold an instance of the class. Protege que solo sea 1 objeto el que se cree en la funcion de singleton. Crea ese objeto en Unico
    private static $instance;

    // The singleton method
    public static function singleton(){
        if (!isset(self::$instance)) {
            self::$instance = new Unico();
        }
        return self::$instance;
    }

    private function __construct() {}

}
$config=Config::singleton(); //solo puede haber uno por el public static, es unico
echo $config->getNombre();
    // $user1 = Unico::singleton(3); //es el mismo objeto que user2 y user3, los datos son los mismos. Al poner el 3 en user1, user2=3 y user2=3 
    // $user2 = Unico::singleton();
    // $user3 = Unico::singleton();

?>