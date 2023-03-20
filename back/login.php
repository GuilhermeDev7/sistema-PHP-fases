<?php

if(isset($_POST['email']) && isset($_POST['senha'])) {
        include("conexao.php");

        $email = $_POST["email"];
        $senha = $_POST['senha']; 

        $sql_code = "SELECT * FROM pessoa WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])) {
                if(!isset($_SESSION))
                        session_start();
                $_SESSION['usuario'] = $usuario['id'];
                echo "Logando"; 
                header("Location: ../Views/home.php");
        } else {
                echo "Email ou senha invalidas";
        }
}

?>