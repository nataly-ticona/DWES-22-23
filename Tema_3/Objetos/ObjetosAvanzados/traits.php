<?php
//herencia multiple por asi dec
//te permite definir atributos
trait DiceHola
{
    public function hola()
    {
        echo "Hola mundo!<br/>";
    }
}

class Simple
{
    use DiceHola;

    private $var;

    public function otraCosa()
    {
        echo "Otra cosa";
    }
}

$o = new Simple();
$o->hola();
$o->otraCosa();

?>









<?php
trait Imprimible
{
    public function imprime()
    {
        //pilla las variables del objeto y las convierte en un array
        foreach (get_object_vars($this) as $propiedad => $valor) {
            echo "$propiedad $valor<br />";
        }
    }
}

class Persona
{
    use Imprimible, DiceHola;

    public $nombre;
    public $apellido;
    public $edad;
}

$p = new Persona();
$p->nombre ="Jorge";
$p->apellido ="Dueñas";
$p->edad ="23";
$p->imprime();
?>










<?php
interface ICosa
{
    public function uno();
    public function dos();
}

abstract class Cosilla implements ICosa
{
    public function uno()
    {
        echo "Uno!<br/>";
    }

    abstract public function dos();
}

trait ImprimeNumeroMetodos
{
    function imprimeNumeroMetodos()
    {
        echo count(get_class_methods($this)) . "<br/>";
    }
}

class Cosaza extends Cosilla
{
    use ImprimeNumeroMetodos;
    public function dos()
    {
        echo "Dos!<br/>";
    }
}

class Cosota extends Cosaza
{
    public function medjaronUnTraitDeHerencia()
    {
        $this->imprimeNumeroMetodos();
    }
}

$o = new Cosaza();
$o->uno();
$o->dos();
$o->imprimeNumeroMetodos();

$on = new Cosota();
$on->medjaronUnTraitDeHerencia();
?>