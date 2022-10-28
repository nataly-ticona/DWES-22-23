<?php

class Humano implements JuegoInterfaz{
    public function atacar():string{
        return 'atacar';
    }
    public function defender():string{
        return 'defender';
    }
    use Posicion;
}
?>