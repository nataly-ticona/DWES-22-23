<?php
abstract class Mago implements JuegoInterfaz{
    abstract public function atacar():string;
    public function defender():string{
        return 'hechizo protector';
    }
}?>