<?php
namespace Formulario;
class InputEmail extends Input{
    public function __construct($nombre, $placeholder = null, $dato = null, $regex = FILTER_VALIDATE_EMAIL) {
        $this->tipo = "mail";
        parent::__construct($nombre, $placeholder, $dato, $regex);
    }

    public function validar(){
        parent::validar();
        //validamos si el correo es correcto con el regex 
        if(!preg_match($this->regex, $this->dato)){
            //ponemos en el array padre los posibles errores que hayan
            parent::$errores[$this->nombre]= ucfirst($this->nombre) . ' no es un correo valido';
        }
    }

    public function pintarInput(){ ?>
        <label class="form__label">
            <?= ucfirst($this->nombre) ?>:
            <input required class="form__input" type="<?= $this->tipo ?>" name="<?= $this->nombre ?>" value="<?= $this->dato ?>" placeholder="<?= $this->placeholder ?>">
        </label>
    <?php }
}
?>