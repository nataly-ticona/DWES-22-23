<?php
namespace Formulario;
class InputPassword extends Input{
    const PSSWD = "[\w]";
    public function __construct($nombre, $placeholder = null, $dato = null, $regex = self::PSSWD) {
        $this->tipo = "password";
        parent::__construct($nombre, $placeholder, $dato, $regex);
    }

    public function validar() {
        parent::validar();
    }

    public function pintarInput() { ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <input required class="form__input" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $this->dato ?>" placeholder="<?= $this->placeholder ?>">
        </label>
    <?php }
}
?>