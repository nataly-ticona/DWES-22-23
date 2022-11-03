<?php
namespace bancos;
class BitCoinConan implements PlataformaPago{
    public function estableceConexión():bool{
        echo 'establece conexion BitCoinConan';
        return true;
    }
    public function compruebaSeguridad():bool{
        echo 'conexion segura BitCoinConan';
        return true;
    }
    public function pagar(string $cuenta, int $cantidad){
        echo 'Pago realizado BitCoinConan';
    }
}
?>