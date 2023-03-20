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
                                <form class="formulario2" action="../back/criarUsuario" method="post">
                                <h2>Cadastrar novo usuario</h2><br><br>
                                        <h3>Dados pessoais</h3>
                                <div>
                                        <label>Nome</label><br>
                                        <input id="nome" autofocus type="text" name="nome">
                                </div>
                                <div>
                                        <label>RG</label>
                                        <input type="text" name="rg">
                                </div>
                                <div>
                                        <label>CPF</label><br>
                                        <input type="text" name="cpf">
                                </div>
                                <div>
                                        <label>Email</label><br>
                                        <input type="text" name="email">
                                </div>
                                <div>
                                        <label>Telefone</label><br>
                                        <input type="text" name="tele">
                                </div>
                                        <h3>Endereço</h3>
                                <div>
                                        <label>Cep</label><br>
                                        <input type="text" name="cep">
                                </div>
                                <div>
                                        <label>Rua</label><br>
                                        <input type="text" name="rua">
                                </div>
                                <div>
                                        <label>Cidade</label><br>
                                        <input type="text" name="cidade">
                                </div>
                                <div>
                                        <label>Pais</label><br>
                                        <input type="text" name="pais">
                                </div>
                                        <h3>Escolaridade</h3>
                                <div>
                                        <label>Escola</label><br>
                                        <input type="text" name="escola">
                                </div>
                                <div id="grau">
                                        <label>Grau</label><br><br>
                                        <p class="p">Ensino funtamental</p><input class="grau" type="radio" value='Fundamental' checket name="grau">
                                        <p class="p">Ensino médio</p><input class="grau" value='Médio' type="radio" checket name="grau">
                                        <p class="p">Tecnico</p><input class="grau" value='Tecnico' type="radio" checket name="grau">
                                        <p class="p">Superior</p><input class="grau" value='Superior' type="radio" name="grau">                                           
                                 </div>
                                 <div>
                                        <label>Curso</label>
                                        <input type="text" name="curso">
                                 </div>
                                <div>
                                        <button>Cadastrar</button>
                                </div>
                        </form>
                                </div>
                        </div>
                </div>
        </section>
</body>
</html>