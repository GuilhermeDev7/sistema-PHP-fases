<?php

include("conexao.php");

if(isset($_POST['acao'])) {
        $produto = $_POST['produto'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem'];

        echo $produto . PHP_EOL;
        echo $descricao . PHP_EOL;
        echo $preco . PHP_EOL;
        var_dump($imagem);
        echo $imagem['name'] . PHP_EOL;
} 

?>