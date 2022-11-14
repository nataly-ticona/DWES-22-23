<?php 
class Personal extends Usuario{
    use Telefono;
    private $genero="";
    use Dia;
    use Mes;
    use Anio;

    function __construct($datos){
        parent::__construct($datos['nombre'] ,$datos['apellido'], $datos['correo'],$datos['psswd']);
        $this->telefono=$datos['telefono'] ;
        $this->genero=$datos['genero'];
        $this->dia=$datos['dia'];
        $this->mes=$datos['mes'];
        $this->anio=$datos['anio'];
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
        $errores=[];
        if(!isset($this->telefono) && $this->telefono == ""){$errores['telefono']='no puedes estar vacio';}
    
        if(isset($this->genero) && $this->genero=="off"){
            $errores['genero']='no puedes estar vacio';
        }
    
        if(isset($this->dia) && $this->dia== ""){
            $errores['dia']='no puedes estar vacio';
        }

        if(isset($this->mes) && $this->mes== ""){
            $errores['mes']='no puedes estar vacio';
        }

        if(isset($this->anio) && $this->anio== ""){
            $errores['anio']='no puedes estar vacio';
        }

    }

    //esValido: validar los datos como tal, una vez no son espacios en blanco se vuelven a este metodo para convertir
    function esValido(){
        $erroresMatch=[];
        if(!preg_match("//",$this->telefono)){
            $erroresMatch['telefono']='no puedes estar vacio';
        }
    }
    
    //pintar inputs 
    function pintarInputGeneral($tipo,$nombre){
        echo "<label for='$nombre'></label><br>
              <input type='$tipo' name='$nombre' id='$nombre'>";
    }
    function pintarInputRadio($nombre, array ...$opciones){
        foreach ($opciones as $n ) {
            echo "<label for='$nombre'></label><br><input type='radio' name='$nombre' id='$n'>Mujer";
        }
    }
    function pintarInputSelect($nombre, array ...$opciones){
        echo "<label for='$nombre'></label><br>
        <select name='$nombre' id='$nombre'>";
        array_walk($meses,function($op,$k,$data){ //la k es solo para que funcione data, data es lo que ha puesto el usuario
            $sel = ($op==$data)?"selected":"";
            echo "<option value='$op' $sel>$op</option>";
        },$_POST['mes']);
        echo "</select>";
    }

    //pintar errores: en cada error hay que pintar una p con el tipo de error, ponerlo en el php como en el ejemplo,.
    //guardar
    
}
?>