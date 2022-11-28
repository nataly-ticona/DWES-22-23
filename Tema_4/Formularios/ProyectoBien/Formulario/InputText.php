<?php
namespace Formulario;
class InputText extends Input{
    const MIN=3;
    const MAX=20;
    const TEXTO= '[a-zA-ZÀ-ÿ\s]';
    private $minLength;
    private $maxLength;

    public function __construct($nombre, $placeholder = null, $dato = null, $minLength = self::MIN, $maxLength = self::MAX,  $regex = self::TEXTO) {
        $this->tipo = "text";
        $this->minLength = $minLength;
        $this->maxLength = $maxLength;
        parent::__construct($nombre, $placeholder, $dato, $regex);
    }

    public function validar(){
        parent::validar();
        $regexConTamaño = '/' . $this->regex . '{' . $this->minLength .','. $this->maxLength . '}/';
        if (!preg_match($regexConTamaño, $this->dato)) {
            parent::$errores[$this->nombre] = ucfirst($this->nombre) . " tiene que tener de " . $this->minLength . " a " . $this->maxLength . " caracteres";
        }
    }
    public function pintarInput() { ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <input required class="form__input" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $this->dato ?>" placeholder="<?= $this->placeholder ?>">
        </label>
    <?php }
}

?>