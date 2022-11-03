<?php
namespace bancos;

class BancoMalvado implements PlataformaPago{
        
    public function estableceConexión():bool{
        echo 'establece conexion BancoMalvado ';
        return true;
    }
    public function compruebaSeguridad():bool{
        echo 'conexion segura BancoMalvado ';
        return true;
    }
    public function pagar(string $cuenta, int $cantidad){
        echo 'Pago realizado BancoMalvado ';
    }
}
?>