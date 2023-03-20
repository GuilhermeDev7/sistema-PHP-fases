<?php 

include("conexao.php");

if(count($_POST) > 1) {
        $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['tele'];

        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $pais = $_POST['pais'];

        $escola = $_POST['escola'];
        $grau = $_POST['grau'];
        $curso = $_POST['curso'];

        $sql_code = "INSERT INTO cadastro(nome, rg, cpf, email, telefone,
         cep, rua, cidade, pais, escola, grau, curso) 
        VALUES('$nome','$rg','$cpf','$email','$telefone','$cep','$rua',
        '$cidade','$pais','$escola','$grau','$curso')";

        $mysqli->query($sql_code) or die($mysqli->error);

}

header("Location: ../Views/criar-usuario.php")

?>