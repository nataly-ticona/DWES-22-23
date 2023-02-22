<?php 
//si el usuario presenta una cookie de recuerdame
    //verifico en la base de datos el usuario con el token 
    //require("../src/init.php");
    //
    if (!isset($_SESSION["nombre"]) || $_SESSION["nombre"]==""){

        //si el usuario presenta una cookie de recuerdame
        if(isset($_COOKIE['recuerdame'])){
            echo 'esta pulsado el recuerdame';
            
            $DB->ejecuta(
                "SELECT u.id, u.nombre , t.valor
                FROM usuarios u 
                LEFT JOIN tokens t 
                ON u.id = t.id_usuario 
                WHERE t.valor = ? AND t.expiracion > NOW()", 
                $_COOKIE['recuerdame']
            );

            
            $tokenInfodb = $DB->obtenElDato();
            
            echo print_r($tokenInfodb);

            if ($tokenInfodb != null) {
                //login
                $_SESSION['id'] = $tokenInfodb['id'];
                $_SESSION['nombre'] = $tokenInfodb['nombre'];
                //extiendo su vida otra semana
                //vida de la cookie , numero magico los numeros
                setcookie(
                    "recuerdame", 
                    $tokenInfodb[0]['valor'], 
                    ["expires" => (time() + (7 * 24 * 60 * 60)), "httponly" => true 
                    ]
                );
                //vida del token
                $DB->ejecuta("UPDATE tokens SET expiracion = NOW() + INTERVAL 7 DAY 
                    WHERE valor = ? ", $tokenInfodb['valor']
                    );
                
            }
        }
    }

?>