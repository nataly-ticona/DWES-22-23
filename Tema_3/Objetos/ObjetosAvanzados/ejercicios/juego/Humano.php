<?php
namespace juego;
use \juego\Posicion;

class Humano implements JuegoInterfaz{
    public function atacar():string{
        return 'atacar';
    }
    public function defender():string{
        return 'defender';
    }
    use \juego\Posicion;
}
?>