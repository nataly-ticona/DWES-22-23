<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lilita One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!--metiendo boostrap en css 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <style>
        body{
            background-color: #EAEAEA;
            /* font-family: 'Lilita One';font-size: 22px; */
            font-family: 'Lato';font-size: 22px;
        }
        main{
            width: 90%;
            margin:0 auto;
            text-align: center;
            background: linear-gradient(rgba(0, 255, 0, 0), 10%,  rgba(0, 0, 255, 0.5));
        }
       
        
    </style>
    <title><?=$title?></title>
</head>
<body>
    <nav> 
        <!-- menu -->
    </nav>
    <main id="contenido" class="contenido">
        <h2><?=$pageHeader?></h2>
        <?=$content?>
    </main>
</body>
</html>