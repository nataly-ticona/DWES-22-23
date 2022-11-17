<?php

class Formulario{
        public const DATOS=['nombre','apellido','correo','psswd','telefono','genero','dia','anio','mes'];
        public const TIPOS=['text','text','email', 'password','tel','radio','number','number', 'select'];

        const MESES=['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

        public static function pintarFormulario(){
            for ($i=0; $i < count(self::TIPOS); $i++) { 
                switch (self::TIPOS[$i]) {
                    case 'text':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>

                        <input class='input' type='text' name=".self::DATOS[$i]." id=".self::DATOS[$i]." value=".$_POST[self::DATOS[$i]]." ><br>"; 
                        
                        break;
                    case 'email':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>
                        <input class='input' type='email' name=".self::DATOS[$i]." id=".self::DATOS[$i]." value=".$_POST[self::DATOS[$i]]." ><br>"; 
                        break;
                    case 'password':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>
                        <input class='input' type='password'name=".self::DATOS[$i]." id=".self::DATOS[$i]." value=".$_POST[self::DATOS[$i]]." ><br>"; 
                        break;
                    case 'tel':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>
                        <input class='input' type='tel' name=".self::DATOS[$i]." id=".self::DATOS[$i]." value=".$_POST[self::DATOS[$i]]." ><br>"; 
                        break;
                    case 'number':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>
                        <input class='input' type='number' name=".self::DATOS[$i]." id=".self::DATOS[$i]." value=".$_POST[self::DATOS[$i]]." ><br>"; 
                        break;

                    

                    case 'radio':
                        echo "<label for=".self::DATOS[$i].">".self::DATOS[$i]."</label>";
                        $parametro2=['Mujer','Hombre'];
                        foreach ($parametro2 as $n ) {
                            echo "<input type='radio' name=".self::DATOS[$i]." id='$n' class='input'>$n";
                        }
                        echo "<br>";
                        break;

                    case 'select':
                        echo "<label class='input' for=".self::DATOS[$i]." >".self::DATOS[$i]."</label>
                            <select name=".self::DATOS[$i]." id=".self::DATOS[$i].">";
                                $datoSelect=$_POST[self::DATOS[$i]];
                                for ($i=0; $i < count(self::MESES); $i++) { 
                                    $sel=(self::MESES[$i]==$datoSelect)?"selected='$datoSelect'":"";
                                    echo "<option value=".self::MESES[$i]." $sel>".self::MESES[$i]."</option>";
                                }
                        echo "</select><br>";
                        break;
                }
            }
        }

}


?>