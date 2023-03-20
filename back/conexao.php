<?php

$host = "localhost";
$user = "root";
$senha = "";
$db = "admin";

$mysqli = new mysqli($host, $user, $senha, $db);

if($mysqli->errno) {
        die("Falha ao carregar o banco de dados");
}

?>