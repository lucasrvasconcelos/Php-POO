<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("classe.php");

    $lutadores = [0,1];

    $lutadores[0] = new Lutador('Lucas', 'Fortaleza', 22, 1.8, 70, 10, 0, 0);
    $lutadores[1] = new Lutador('Gustavo', 'São Paulo', 35, 1.9, 70, 10, 0, 0);

    if($lutadores[0] && $lutadores[1]){
        $UFC = new Luta($lutadores[0], $lutadores[1]);
        $UFC->marcarLuta();
    }
    

    

    /* Regras
    1° Só pode ser marcada a luta entre lutadores de mesma categoria !Feito
    2° Os lutadores não podem ser os mesmos
    3° Só pode acontecer a luta se ela for aprovada
    4° O resultado só pode ser de vitória de um dos lutadores ou empate
    */

    ?>
</body>
</html>