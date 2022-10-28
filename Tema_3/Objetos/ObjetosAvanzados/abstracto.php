<?php

abstract class Instrumento {
    private $peso;

    public function setPeso(float $peso) {
        $this->peso = $peso;
    }

    abstract public function tocar();
}

class Guitarra extends Instrumento {
    public function tocar() {
        echo "Pon acorde en mano izquierda<br/>";
        echo "Golpea cuerdas<br/>";
    }
}

class Saxofon extends Instrumento {
    public function tocar() {
        echo "Pon nota en pulsadores<br/>";
        echo "Sopla aire<br/>";
    }
}

?>