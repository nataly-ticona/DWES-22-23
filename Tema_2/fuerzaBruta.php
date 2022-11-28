<?php
$passwd = '';
$pass = false;

while(!$pass) {

    for ($i=122; $i >= 97 && !$pass; $i--) {
        for ($j=97; $j < 123 && !$pass; $j++) { 
            for ($k=97; $k < 123 && !$pass; $k++) {
                for ($l=97; $l < 123 && !$pass; $l++) { 
                    $passwd = chr($i).chr($j).chr($k).chr($l);
                    echo "$passwd ";
                    if(password_verify("$passwd", '$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72')){
                        $pass = true;
                        break;
                    }
                }
            }
        }   
    }
}

//hora 

echo "Contraseña: $passwd";

?>