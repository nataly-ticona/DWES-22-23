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

    
    //pintar inputs 
    function pintarInputGeneral($tipo,$nombre){
        echo "<label for='$nombre'>$nombre</label>
              <input type='$tipo' name='$nombre' id='$nombre'>";
        echo "<br>";
    }
    function pintarInputRadio($nombre,  ...$opciones){
        echo "<label for='$nombre'>$nombre</label>";
        foreach ($opciones as $n ) {
            echo "<input type='radio' name='$nombre' id='$n'>$n";
        }
        echo "<br>";
    }
    function pintarInputSelect($nombre, ...$opciones){
        
        echo "<label for='$nombre'></label><br>
        <select name='$nombre' id='$nombre'>";
        
        array_walk($opciones,function($op,$k,$data){ //la k es solo para que funcione data, data es lo que ha puesto el usuario
            $sel = ($op==$data)?"selected":"";
            echo "<option value='$op' $sel>$op</option>";
        },$this->mes);
        echo "</select><br>";

    }

    //validar datos de la clase
    function validar(){
        parent::validar(); //sobreescribir metodo
        if(!isset($this->telefono) && $this->telefono == ""){
            $errores['telefono']='no puedes estar vacio';}
    
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
        return $errores;
    }

    //esValido: validar los datos como tal, una vez no son espacios en blanco se vuelven a este metodo para convertir
    function esValido(){
        parent::esValido();
        $erroresMatch=[];
        if(!preg_match("/[A-Z]{1}[a-z]{9}/",$this->telefono)){ 
            //puede contener todas las letras  
            $erroresMatch['telefono']='no puedes estar vacio';
        }

    }
    //pintar errores: en cada error hay que pintar una p con el tipo de error, ponerlo en el php como en el ejemplo,.
    //guardar
    
}
?>