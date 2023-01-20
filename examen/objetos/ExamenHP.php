<?php
class ExamenHP extends AExamen{
    const A1=4;
    const A2=5;
    public function obtenerNota(): int{
        return rand(self::A1,self::A2);
    }
}
?>