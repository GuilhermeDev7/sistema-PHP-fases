<?php

include("../back/logado.php");

?>

<?php

 include("../back/conexao.php");

 $sql_usuario = "SELECT * FROM cadastro";
 $query_cadastro = $mysqli->query($sql_usuario) or die($mysqli->error);
 $num_cadastro = $query_cadastro->num_rows;





?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/relacaoCadastro.css">
        <title>Document</title>
</head>
<body>
        <br>        

        <a href="home.php"><button>Voltar menu</button></a>

        <br><br><br>

        <div class="container4">
        
                <div class="div1">
                       <h2 class="sistema">Relação de cadastro</h2><hr><br>
                       <table class="tab">
<thead>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>TELEFONE</th>
                        <th>CEP</th>
                        <th>RUA</th>
                        <th>CIDADE</th>
                        <th>PAIS</th>
                        <th>ESCOLA</th>
                        <th>GRAU</th>
                        <th>CURSO</th>
                        <th>DATA DE CRIAÇÃO</th>
                        <th>Operacoes</th>

                </thead>
              
                <tbody>
    <?php
                        if($num_cadastro == 0) {?>
                        <tr>
                                <td colspan="7">Nenhum cliente cadastrado</td>
                                <?php } else {
                                        while($cliente = $query_cadastro->fetch_assoc()){
                                                
                                                ?>
                        </tr>
                        <tr>
                                <td><?php echo $cliente['id']?></td>
                                <td><?php echo $cliente['nome']?></td>
                                <td><?php echo $cliente['email']?></td>
                                <td><?php echo $cliente['rg']?></td>
                                <td><?php echo $cliente['cpf']?></td>
                                <td><?php echo $cliente['telefone']?></td>
                                <td><?php echo $cliente['cep']?></td>
                                <td><?php echo $cliente['rua']?></td>
                                <td><?php echo $cliente['cidade']?></td>
                                <td><?php echo $cliente['pais']?></td>
                                <td><?php echo $cliente['escola']?></td>
                                <td><?php echo $cliente['grau']?></td>
                                <td><?php echo $cliente['curso']?></td>
                                <td><?php echo $cliente['data-criacao']?></td>
                                <td>
                                        <a href="">Atualizar</a>
                                        <a href="deletarCadastro.php">Deletar</a>
                                      
                                </td>
                        </tr>
                        <?php };
                        }?>
                </tbody>
        </table>
        
                </div>
        </div>
</body>
