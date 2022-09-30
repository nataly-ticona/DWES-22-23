/**/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<body>
    <h2>Array map</h2>
    <?php
    $personas = [
        ["Jorge", 1],
        ["Bea", 0],
        ["Paco", 1],
        ["Amparo", 0],
    ];
    function per($n){
        for ($i=0; $i < count($personas) ; $i++) { 
            if($personas[$i][1]==1){
                $n="señor";
            }else{
                $n="señora";
            }
        }
        return $n;
    }
    $perFinal=array_map( "per",$personas);
    echo "<pre>";
    echo print_r($perFinal);
    echo "</pre>";
    ?>
    
</body>
</html>