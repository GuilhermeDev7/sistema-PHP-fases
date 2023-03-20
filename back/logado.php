<?php

if(!isset($_SESSION))
        session_start();

        if(!isset($_SESSION['usuario']))
die("Voce nao esta logado");


?>