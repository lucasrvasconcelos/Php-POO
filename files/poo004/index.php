<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("classes.php");

    $lutadores = [0,1,2,3,4,5,6];

    foreach ($lutadores as $key => $value) {
        $lutadores[$key] = 
            new Lutador('Nome '     + $key,
            'nacionalidadeLutador ' + $key,
            'idadeLutador '         + $key,
            'alturaLutador '        + $key,
            'pesoLutador '          + $key,
            $value                  + $key,
            $value                  + $key,
            $value                  + $key);
    }

    ?>
</body>
</html>