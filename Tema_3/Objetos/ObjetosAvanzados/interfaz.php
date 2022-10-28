<?php

interface Ordenable
{
    public function estableceClave($k);
    public function obtieneClave();
    public function esMayor(Ordenable $o);
    public function esIgual(Ordenable $o);
    public function esMenor(Ordenable $o);
}

class Numero implements Ordenable
{
    private $clave;

    public function estableceClave($k)
    {
        $this->clave = $k;
    }
    public function obtieneClave()
    {
        return $this->clave;
    }
    public function esMayor(Ordenable $o)
    {
        return $this->obtieneClave() > $o->obtieneClave();
    }
    public function esIgual(Ordenable $o)
    {
        return $this->obtieneClave() == $o->obtieneClave();
    }
    public function esMenor(Ordenable $o)
    {
        return $this->obtieneClave() < $o->obtieneClave();
    }
}

?>