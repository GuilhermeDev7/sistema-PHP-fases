<?php

include("conexao.php");

$erro = "";

//Pegando dados do HTML
if(isset($_POST)) {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $adm = $_POST['adm'];

        //Validação de nome
        if(empty($nome)) {
                $erro = 'Preencha o campo nome';
        }

        //Validação de endereço
        if(empty($endereco)) {
                $erro = 'Preemcha o campo endereço';
        }

        //Validação de email
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro = "Email invalido";
        }else {
                echo "Email validato com sucesso!!!";
        }

        //Enviando dados para o banco de dados
       
                $sql = "INSERT INTO pessoa(nome, endereco, email, senha, adm)
                VALUES('$nome', '$endereco','$email', '$senha', '$adm')";
                $mysqli->query($sql) or die($mysqli->error);
       
}

header('Location: ../Views/login.php');
?>
