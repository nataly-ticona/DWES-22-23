<?php

Class MagoBlanco extends Mago{
    public function atacar():string{
        return 'ataque de luz';
    }
    use Posicion;
}
?>