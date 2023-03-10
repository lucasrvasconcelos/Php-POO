<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: monospace;
        }

        body{
            width: 100vw;
            height: 100vh;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        main {
            max-width: 320px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.164);
            line-height: 25px;
        }

        p {
            padding:10px;
            
        }
        main p:nth-child(1n){
            border:1px solid black;
        }

        main p:nth-child(2n) {
            background-color: rgba(0, 0, 0, 0.555);
            color:white;
        }

    </style>
</head>
<body>
    <main> 
        <a href="./arquivos/classe.txt" download="classe.php">Classe.php</a>
        <a href="./arquivos/index.txt" download="index.php">Index.php</a>
        <?php
        require_once('classe.php');
        
        $canetaObject = new Caneta;

        $corAtual = $canetaObject->getCor();
        echo '<p>require_once("classe.php")</p>';
        echo '<p>$canetaObject = new Caneta</p>';
        echo '<p>$corAtual = $canetaObject->getCor()</p>';
        echo "<p>A cor da caneta é: " . $corAtual . "</p>";

        $canetaObject->setTampada();
        $canetaObject->setDestampada();

        $tamparCaneta = $canetaObject->tampar();
        if($tamparCaneta){
            $msg = 'Sim';
        } else {
            $msg = 'Não';
        }
        echo "<p>É possível tampar a caneta: ". $msg ."</p>";

        $destamparCaneta = $canetaObject->destampar();
        if($destamparCaneta){
            $msg = 'Sim';
        } else {
            $msg = 'Não';
        }
        echo "<p>É possível destampar a caneta: ". $msg ."</p>";
        ?>
            
    </main>
</body>
</html>