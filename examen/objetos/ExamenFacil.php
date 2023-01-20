<?php
class ExamenFacil extends AExamen{
    const A1=5;
    const A2=10;
    public function obtenerNota(): int{
        return rand(self::A1,self::A2);
    }
}
?>