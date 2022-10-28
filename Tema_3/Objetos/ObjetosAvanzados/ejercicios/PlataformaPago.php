<?php
    interface PlataformaPago{
        public function estableceConexión():bool;
        public function compruebaSeguridad():bool;
        public function pagar(string $cuenta, int $cantidad);
    }

?>