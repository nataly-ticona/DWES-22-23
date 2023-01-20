<?php
class ExamenChungo extends AExamen{
    const A1=0;
    const A2=7;

    public function obtenerNota(): int{
        return rand(self::A1,self::A2);
    }
}
?>