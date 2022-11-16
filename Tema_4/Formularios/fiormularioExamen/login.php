<?php

/*protipo de login */
function login($correo, $contrasenia){
    $data = file_get_contents("usuarios.csv");
    $lines = explode("\n", $data);

    $correos=[];
    $contrasenias=[];

    foreach ($lines as $n) {
    $fields = explode(";" ,$n);
    array_push($correos, $fields[2]);
    array_push($contrasenias, $fields[3]);
    }

    for ($i=0; $i < sizeof($correo) ; $i++) { 
        if ($correos[$i]==$correo && password_verify($contrasenia, $contrasenias[$i])) {
            return true;
        }else {
            return 'contrasña incorrecta';
        }
    }
}

?>