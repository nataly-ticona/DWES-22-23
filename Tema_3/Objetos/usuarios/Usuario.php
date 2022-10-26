<?php
class Usuario{
    //cada vez que el jugador gane 6 gana 1 nivel
    const NMAX=6; //el maximo de partidas que se puede ganar para subir nivel
    const NMIN=-6; //el max de partidas perdidas para perder un nivel
    static $historialPart=6; //el numero que tendra el usuario del historial

    private $nombre;
    private $apellidos;
    private $deporte;
    private $nivel;
    private $historial; //guardar cada partido
    
    //constructor
    public function ___contruct(string $nombre,string $apellidos, string $deporte, int $nivel, int $historial){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->deporte=$deporte;
        $this->nivel=0;
        $this->historial=0;
    }

    //getters y setters
    public function getNombre(){return $this->nombre;}
    public function getApellidos(){return $this->apellidos;}
    public function getDeporte(){return $this->deporte;}
    public function getNivel(){return $this->nivel;}
    public function getHistorial(){return $this->historial;}

    public function setNombre($nombre){$this->nombre=$nombre;}
    public function setApellidos($apellidos){$this->apellidos=$apellidos;}
    public function setDeporte($deporte){$this->deporte=$deporte;}

    
    public function introducirResultado(string $resultado){
        switch (strtolower($resultado)) {
            case 'victoria':
                $this->historial++;
                echo "Gana ". $this->nombre;
                break;
            case 'derrota':
                $this->historial--;
                echo "Pierde ". $this->nombre;
                break;
            case 'empate':
                
                break;
        }
        if ($this->nivel < self::NMAX && $this->historico == self::$historialPart) {
            $this->nivel++;
            $this->historial = 0;
            echo $this->nombre." sube a nivel ".$this->nivel."<br>";
        } elseif($this->nivel > self::NMIN && $this->historico == (self::$historialPart) * -1) {
            $this->nivel--;
            $this->historial = 0;
            echo $this->nombre." baja a nivel ".$this->nivel."<br>";
        }

    }
    public function imprimirInformacion() { 
        echo "Imprimir ".$this->nombre."<br>";
        ?>
            <div class="imprimirI">
                <ul>
                    <li>Nombre: <?= $this->nombre ?></li>
                    <li>Apellidos: <?= $this->apellidos ?></li>
                    <li>Deporte: <?= $this->deporte ?></li>
                    <li>Nivel: <?= $this->nivel ?></li>
                    <li>Historico: <?= $this->historial ?></li>
                </ul>
            </div>
        <?php
    }

}
?>