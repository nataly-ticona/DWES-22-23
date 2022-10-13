
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <pre>
    <?php
        $com;
            for ($i=0; $i <=20 ; $i++) { 
                $com[$i]=rand(0,20);
            }
            echo "Generar array: <br>";
                print_r($com);

        sort($com);
            echo "Ordenado: ";
            foreach ($com as $key => $val) {
                echo  "\n". "[".$key . "] = " . $val ;
            }
        $mitad1=array_slice($com,0,sizeof($com)/2);
        echo "<br> Mitad <br>";
        print_r($mitad1);
        $mitad2=array_slice($com,sizeof($com)/2);
        
        echo "<br> Push <br>";
        array_push($mitad2,$mitad1);
        print_r($mitad2);

    ?>
    </pre>
</body>
</html>