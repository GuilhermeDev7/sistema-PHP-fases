<?php
 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=relatario01.xls");
 header("Pragma: no-cache");

 include("conexao.php");

 $sql_usuario = "SELECT * FROM cadastro";
 $query_cadastro = $mysqli->query($sql_usuario) or die($mysqli->error);
 $num_cadastro = $query_cadastro->num_rows;
 

?>

<meta charset='utf-8'>
<table>
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
                        </tr>
                        <?php };
                        }?>
                </tbody>
        </table>