<?php
namespace Formulario;
class InputNumber extends Input{
    const NUMERO='/^[69]{1}[0-9]{8}$/';

    public function __construct($nombre, $placeholder = null, $dato = null, $regex = self::NUMERO) {
        $this->tipo="number";
        parent::__construct($nombre, $placeholder, $dato, $regex);
    }

    public function validar() {
        parent::validar();

        // Comprobación específica
        if (!preg_match($this->regex, $this->dato)) {
            parent::$errores[$this->nombre] = ucfirst($this->nombre) . " tiene que empezar por 6 o 9 y tener una longitud de 8 caracteres";
        }
    }

    public function pintarInput() { ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <input required class="form__input" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $this->dato ?>" placeholder="<?= $this->placeholder ?>" >
        </label>
    <?php 
    }
}
?>