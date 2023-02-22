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
            width: 320px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.164);
            line-height: 25px;
        }

        p {
            padding:10px;
            word-wrap: normal;
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

                $conta = new Banco;

                $conta->setTipoConta('cc');
                $conta->abrirConta();
                $conta->depositar(100);
                $conta->sacar(150);
                
            ?>

        <pre>
            <?php
            print_r($conta);
            ?>
        </pre>
    </main>
</body>
</html>