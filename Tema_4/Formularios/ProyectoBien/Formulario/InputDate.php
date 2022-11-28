<?php
namespace Formulario;
class InputDate extends Input{
    const MINIMO=18;
    const MAXIMO=100;

    public function __construct($nombre, $dato = null, $minAge = self::MINIMO, $maxAge = self::MAXIMO) {
        $this->type = "date";
        $this->minAge = $minAge;
        $this->maxAge = $maxAge;
        parent::__construct($nombre, null, $dato, null); 
        //como es un date los demas parametros del padre los ponemos como null
    }

    public function validar(){
        parent::validar();
        //el dia actual
        $dia = new \DateTime("now");
        $dia->format("Y-m-d");

        //haces la diferencia de la fecha de ahora con la fecha que ha puesto el usuario
        $diferencia = date_diff(new \DateTime($this->dato), $dia);
        //años de la persona
        $diferencia = intval($diferencia->format("%R%y"));
    
        if ($diferencia <= $this->minAge) {
            parent::$errores[$this->nombre] = 'No puede ser menor de edad';
        }else if($diferencia > $this->maxAge){
            parent::$errores[$this->nombre] = 'Ha superado la edad maxima';
        }
    }

    public function pintarInput() { ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <input required class="form__input" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $this->dato ?>">
        </label>
    <?php }
}
?>