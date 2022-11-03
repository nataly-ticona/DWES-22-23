<?php
    class UsuarioAdmin extends Usuario{
    
        function ___contruct(string $nombre,string $apellidos, string $deporte, int $nivel = 0, int $historial=0){
           parent::___contruct($nombre,$apellidos,$deporte,$nivel,$historial);
        }
        
        public function crearPartido(){
            return "partida creada";
        }
        
    }
?>