<?php
require_once("classePessoa.php");
require_once("classeLivro.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <h1>POO 05</h1>
    <main>
        <?php
        
        $pessoa = new Pessoa('Lucas', 22, 'M');
        $pessoa->fazerAniversario();

        $livro = new Livro('Php Avançado','Gustavo guanabara', 300, $pessoa);

        $livro->abrir();
        $livro->fechar();
        $livro->abrir();
        $livro->folhear(1);


        echo "<pre>";
        print_r($pessoa);
        print_r($livro );
        echo "</pre>";
        ?>
    </main>
</body>
</html>