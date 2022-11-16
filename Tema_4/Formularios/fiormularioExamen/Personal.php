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
    function pintarInputGeneral($tipo,$nombre){
        echo "<label for='$nombre'>$nombre</label>
              <input type='$tipo' name='$nombre' id='$nombre'> ";
        echo "<br>";      
    //salida de errores en caso de que haya un algo dentro de erorres 
        /*if (isset($this->errores[$nombre])) {
            echo "<div class='error'><p>".$this->errores[$nombre]."</p></div>";
        }*/
        
        
    }
    function pintarInputRadio($nombre,  ...$opciones){
        echo "<label for='$nombre'>$nombre</label>";
        foreach ($opciones as $n ) {
            echo "<input type='radio' name='$nombre' id='$n' >$n";
        }
        echo "<br>";
        /*if (isset($this->errores[$nombre])) {
            echo "<div class='error'><p>".$this->errores[$nombre]."</p></div>";
        }*/
        
    }
    function pintarInputSelect($nombre, ...$opciones){
        
        echo "<label for='$nombre'></label><br>
        <select name='$nombre' id='$nombre'>";
        
        array_walk($opciones,function($op,$k,$data){ //la k es solo para que funcione data, data es lo que ha puesto el usuario
            $sel = ($op==$data)?"selected":"";
            echo "<option value='$op' $sel>$op</option>";
        },$this->mes);
        echo "</select><br>";
        /*if (isset($this->errores[$nombre])) {
            echo "<div class='error'><p>".$this->errores[$nombre]."</p></div>";
        }*/
        

    }

    //validar datos de la clase
    function validar(){
        parent::validar(); //sobreescribir metodo
        if(isset($this->telefono) && $this->telefono == ""){
            $this->errores['telefono']='telefono esta vacio';
        }else if(preg_match("/[69]{1}[0-9]{8}$/",$this->telefono)){

        }
        if(isset($this->genero) && $this->genero==""){
            $this->errores['genero']='selecciona un genero';
        }

        if(isset($this->dia) && $this->dia== ""){
            $this->errores['dia']='dia esta vacio';
        }else if($this->dia<1 || $this->dia>31){
            $this->errores['dia']='la fecha tiene que ser entre 1 y 31';
        }else if($this->mes=='febrero' && $this->dia>28)
            $this->errores['dia']='febrero no tiene tantos dias';

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

    //esValido: validar los datos como tal, una vez no son espacios en blanco se vuelven a este metodo para convertir
    function esValido(){
        if(!isset($this->errores)){
            //guardado
            file_put_contents("usuarios.csv","".parent::getNombre().";".parent::getApellido().";".parent::getCorreo().";".parent::getPsswd().";$this->telefono;$this->genero;$this->dia;$this->mes;$this->anio;\n",FILE_APPEND);
            
            //redirect, el header no puede escribir nada antesd e la cabecera (como las cookies)
            header("Location: listado.php");
            exit();
        }else{
            if(isset($this->errores['nombre'])){echo $this->errores['nombre']. '<br>';}
            if(isset($this->errores['apellido'])){echo $this->errores['apellido'] . '<br>';}
            if(isset($this->errores['correo'])){echo $this->errores['correo']. '<br>';}
            if(isset($this->errores['psswd'])){echo $this->errores['psswd']. '<br>';}
            if(isset($this->errores['telefono'])){echo $this->errores['telefono']. '<br>';}
            if(isset($this->errores['telefono'])){echo $this->errores['telefono']. '<br>';}
            if(isset($this->errores['dia'])){echo $this->errores['dia']. '<br>';}
            if(isset($this->errores['mes'])){echo $this->errores['mes']. '<br>';}
            if(isset($this->errores['anio'])){echo $this->errores['anio']. '<br>';}
        }

    }
    
}
?>