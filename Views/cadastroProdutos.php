<?php

include("../back/logado.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/criarUsuario.css">
        <title>criar-usuario</title>
</head>
<body>
        <section class="container3">
                <?php require("cabecario.php");?>
                <div class="div">
                        <div class="formulario">
                                <div class="formulario1">
                                <form class="formulario2" enctype="multipart/form-data" action="../back/criarProd" method="post">
                                <h2>Cadastrar novo usuario</h2><br><br>
                                        <h3>Cadastro de Produtos</h3>
                                <div>
                                        <label>Produto</label><br>
                                        <input id="nome" autofocus type="text" name="produto">
                                </div>
                                <div>
                                        <label>Descrição</label>
                                        <input type="text" name="descricao">
                                </div>
                                <div>
                                        <label>Preço</label><br>
                                        <input type="text" name="preco">
                                </div>
                                <div>
                                        <label>Imagem</label><br>
                                        <input type="file" multiple name="imagem[]">
                                </div>
                                
                                <div>
                                        <input type="submit" name="acao" value="Cadastrar">
                                </div>
                        </form>
                                </div>
                        </div>
                </div>
        </section>
</body>
</html>