<?php
namespace juego;
use \juego\Posicion;

Class MagoOscuro extends Mago{
    public function atacar():string{
        return 'ataque de sombra';
    }
    use Posicion;
}
?>