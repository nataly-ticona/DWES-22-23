<?php
namespace Formulario;
class InputRadio extends Input{
    private $valores=[];
    public function __construct($nombre, $dato = null, string ...$valores) {
        $this->tipo="radio";
        //array de los valores que han puesto
        foreach ($valores as $value) {
            $this->valores[] = $value;
        }
        parent::__construct($nombre, null, $dato, null);
    }

    public function validate() {
        // Comprobación específica si esta el dato en el array de valores
        if (!in_array($this->dato, $this->valores)) {
            parent::$errores[$this->nombre] = ucfirst($this->nombre) . " tiene un valor no válido";
        }
    }

    public function pintarInput() { ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <div class="form__radio">
                <?php foreach ($this->valores as $value) : ?>
                    <label class="form__label">
                        <input class="form__input form__input--radio" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $value ?>" <?= ($value == $this->dato)?"checked":""; ?> > <?= $value ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </label>
    <?php }
}
?>