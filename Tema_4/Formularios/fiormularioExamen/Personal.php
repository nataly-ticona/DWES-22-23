<?php
class Personal extends Usuario{
    use Telefono;
    private $genero;
    use Dia;
    use Anio;
    use Mes;

    function __construct($datos){
        parent::__construct($datos['nombre'] ,$datos['apellido'], $datos['correo'],$datos['psswd']);
        $this->telefono=$datos['telefono'] ;
        $this->genero=$datos['genero'];
        $this->dia=$datos['dia'];
        $this->anio=$datos['anio'];
        $this->mes=$datos['mes'];
    }

    //getters y setters
    function getTelefono(){return $this->telefono;}
    function setTelefono($telefono){$this->telefono=$telefono;}
    
    function getGenero(){return $this->genero;}
    function setGenero($genero){$this->genero=$genero;}

    function getDia(){return $this->dia;}
    function setDia($dia){$this->dia=$dia;}

    function getMes(){return $this->mes;}
    function setMes($mes){$this->mes=$mes;}

    function getAnio(){return $this->anio;}
    function setAnio($anio){$this->anio=$anio;}

    


    //validar datos de la clase
    function validar(){
        parent::validar(); //sobreescribir metodo
        $this->telefono=Validacion::validarTelefono($this->telefono);
        $this->genero=Validacion::validarGenero($this->genero);
        $this->dia=Validacion::validarDia($this->dia);
        $this->mes=Validacion::validarMes($this->mes);
        $this->anio=Validacion::validarAnio($this->anio);
    }

    // //validar datos no repetidos como el correo para mandarlos al csv 
    function esValido(){
        //mandamos el array de errores para comprobar si existen datos en el array (hay errores)
        if(count(Validacion::getErrors())==0){
            //guardado
            file_put_contents("usuarios.csv","".parent::getNombre().";".parent::getApellido().";".parent::getCorreo().";".parent::getPsswd().";$this->telefono;$this->genero;$this->dia;$this->mes;$this->anio;\n",FILE_APPEND);
            
            //redirect, el header no puede escribir nada antes de la cabecera (como las cookies)
            header("Location: listado.php");
            exit();
        }else{
            $error=Validacion::getErrors();
            foreach ($error as $s) {
            echo '<p class="error">'.$s. '</p>';
            }
        }
    }
}
?>