<?php 
class Personal extends Usuario{
    use Telefono;
    private $genero;
    use Dia;
    use Mes;
    use Anio;

    function __construct(String $nombre,String $apellido, String $correo,String $psswd, int $telefono, String $genero, int $dia, String $mes, int $anio){
        parent::__construct($nombre,$apellido,$correo,$psswd);
        $this->telefono=$telefono;
    }
    
}
?>