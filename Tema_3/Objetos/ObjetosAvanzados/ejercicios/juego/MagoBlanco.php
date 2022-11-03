<?php
namespace juego;
use \juego\Posicion;

Class MagoBlanco extends Mago{
    public function atacar():string{
        return 'ataque de luz';
    }
    use Posicion;
}
?>