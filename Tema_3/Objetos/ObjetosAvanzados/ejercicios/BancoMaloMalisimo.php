<?php
class BancoMaloMalisimo implements PlataformaPago{
    public function estableceConexión():bool{
        echo 'establece conexion BancoMaloMalisimo ';
        return true;
    }
    public function compruebaSeguridad():bool{
        echo 'conexion segura BancoMaloMalisimo ';
        return true;
    }
    public function pagar(string $cuenta, int $cantidad){
        echo 'Pago realizado BancoMaloMalisimo ';
    }
}
?>