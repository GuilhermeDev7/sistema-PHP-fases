<?php

include("../back/conexao.php");



$id = $_GET['id'];
$sql = "DELETE FROM cadastro WHERE id = '$id'";
$sql_query = $mysqli->query($sql) or die($mysqli->error);


if($sql_query) {
        echo "<h2>Usuario $id excluido com sucesso!!!</h2>";
        
}



var_dump($id);

//header('Location: ../Views/relacaoCadastro.php');

?>