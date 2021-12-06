<?php
    $servidor = "localhost";
    $usuario = "FuncionarioWesten";
    $senha = "12345678";
    $banco = "db_siteWesten";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>