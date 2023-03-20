<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/cabecario.css">
        <title></title>
</head>
<body>
        <section class="container2">
                <div>
                        <nav>
                                <br>
                                <img src="../css/icons/logo.png" alt="">
                                <br>
                                <p class="p"><?php echo "Id do usuario: " . $_SESSION['usuario'] ?></p>
                                <br>
                                <h3><a href="home.php">Lancamentos</a></h3><hr>
                                <h3><a href="">Sobre</a></h3><hr>
                                <h3><a href="criar-usuario.php">Cadastro de Usúario</a></h3><hr>
                                <h3><a href="cadastroProdutos.php">Cadastro de Produto</a></h3><hr>
                                <h3><a href="relacaoCadastro.php">Relação de cadastros</a></h3><hr>
                                <h3><a href="relatorios.php">Relatorios</a></h3><hr>
                                <h3 id="sair"><a href="../back/logout.php"><img src="../css/icons/sair.png" alt="">  Sair</a><hr></h3>
                        </nav>
                        
                </div>
        </section>
</body>
</html>