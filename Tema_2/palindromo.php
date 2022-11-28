<?php
    if(isset($_GET['palabra'])) {
        $cadena = $_GET['palabra'];
    } else {
        $cadena = '';
    }

    function palindromo($cadena) {
        $cadena=strtolower($cadena);
        $cadena = str_replace(array("á","é","í","ó","ú"," "),array("a","e","i","o","u",""),$cadena);
        $longitud = strlen($cadena);
        $palindromo = true;
        for ($i=0; $i < $longitud; $i++) { 
            if($cadena[$i] != $cadena [($longitud-$i)-1]) {
                $palindromo = false;
            }
        }

        return $palindromo;
    }
    
    function letras($cadena) {
        $cadena = strtolower($cadena);
        $cadena = str_replace(array("á","é","í","ó","ú"," "),array("a","e","i","o","u",""),$cadena);
        $longitud = strlen($cadena);
        $letras = [
            "vocales" => 0,
            "consonantes" => 0
        ];

        for ($i=0; $i < $longitud; $i++) { 
            if ($cadena[$i]=='a' || $cadena[$i]=='e' || $cadena[$i]=='i' || $cadena[$i]=='o' || $cadena[$i]=='u') {
                $letras['vocales']++;
            } elseif($cadena[$i] >= 'a' && $cadena[$i]<= 'z') {
                $letras['consonantes']++;
            }
        }

        // $letras['vocales'] = substr_count($cadena, "a") + substr_count($cadena, "e") + substr_count($cadena, "i") + substr_count($cadena, "o") + substr_count($cadena, "u"); 

        // $letras['consonantes'] =  strlen($cadena) - $letras['vocales'];

        return $letras;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
    <link rel="stylesheet" href="./css/palindromo.css">
</head>
<body>
    <main>
        <h3>Palindromo</h3>
    
        <form action="" method="GET">
    
        <div>
            <label for="palabra">Palabra</label>
            <input type="text" name="palabra" id="palabra" value="<?=$cadena?>"><br>
        </div>

        <?php if(isset($_GET['palabra'])) { ?>
        <div>
            <span>Vocales: </span> <span><?=letras($cadena)['vocales']?></span>
        </div>

        <div>
            <span>Consonantes: </span> <span><?=letras($cadena)['consonantes']?></span>
        </div>

        <div>
            <span>Palindromo: </span> <span><?=palindromo($cadena)?'Sí':'No';?></span>
        </div>    

        <?php } ?>
        
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>