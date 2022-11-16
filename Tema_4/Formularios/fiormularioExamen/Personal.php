<?php 
class Personal extends Usuario{
    use Telefono;
    private $genero;
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
    function pintarInputGeneral($tipo,$nombre, $valor=''){
        echo "<label for='$nombre'>$nombre</label>
              <input type='$tipo' name='$nombre' id='$nombre' value='$valor' class='input'> ";
        echo "<br>";      
    }
    function pintarInputRadio($nombre,  ...$opciones,){
        echo "<label for='$nombre'>$nombre</label>";
        foreach ($opciones as $n ) {
            echo "<input type='radio' name='$nombre' id='$n' class='input'>$n";
        }
        echo "<br>";
        
        
    }
    function pintarInputSelect($nombre, ...$opciones){
        echo "<label for='$nombre' class='input'>$nombre</label>
        <select name='$nombre' id='$nombre'>";

        array_walk($opciones,function($op,$k){ 
            //la k es solo para que funcione data, data es lo que ha puesto el usuario
            $sel=($op==$this->mes)?"selected='$this->mes'":"";
            echo "<option value='$op' $sel>$op</option>";
        },$this->mes);
        echo "</select><br>";
    }

    //validar datos de la clase
    function validar(){
        parent::validar(); //sobreescribir metodo
        if(isset($this->telefono) && $this->telefono == ""){
            $this->errores['telefono']='Telefono esta vacio';
        }else if(!preg_match("/[69]{1}[0-9]{8}$/",$this->telefono)){
            $this->errores['telefono']='El telefono tiene que empezar por 6 o 9 y luego 8 numeros';
        }
        if(isset($this->genero) && $this->genero==""){
            $this->errores['genero']='Selecciona un genero';
        }

        if(isset($this->dia) && $this->dia== ""){
            $this->errores['dia']='Dia esta vacio';
        }else if($this->dia<1 || $this->dia>31){
            $this->errores['dia']='La fecha tiene que ser entre 1 y 31';
        }else if($this->mes=='febrero' && $this->dia>28)
            $this->errores['dia']='Febrero no tiene tantos dias';

        if(isset($this->mes) && $this->mes== ""){
            $this->errores['mes']='mes esta vacio';
        }

        if(isset($this->anio) && $this->anio== ""){
            $this->errores['anio']='anio esta vacio';
        }else if($this->anio<1940 || $this->anio>2004){
            $this->errores['anio']='año no correcto';
        }
        
        return $this->errores;
    }

    //esValido
    function esValido(){
        
        
        if(!isset($this->errores)){
            //guardado
            file_put_contents("usuarios.csv","".parent::getNombre().";".parent::getApellido().";".parent::getCorreo().";".parent::getPsswd().";$this->telefono;$this->genero;$this->dia;$this->mes;$this->anio;\n",FILE_APPEND);
            
            //redirect, el header no puede escribir nada antes de la cabecera (como las cookies)
            header("Location: listado.php");
            exit();
        }else{
            parent::esValido();
            if(isset($this->errores['telefono'])){echo '<p class="error">'.$this->errores['telefono'].'</p>';}
            if(isset($this->errores['genero'])){echo '<p class="error">'. $this->errores['genero']. '</p>';}
            if(isset($this->errores['dia'])){echo '<p class="error">'. $this->errores['dia']. '</p>';}
            if(isset($this->errores['mes'])){echo '<p class="error">'.$this->errores['mes']. '</p>';}
            if(isset($this->errores['anio'])){echo '<p class="error">'.$this->errores['anio']. '</p>';}
        }

    }
    
}
?>