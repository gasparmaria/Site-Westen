<?php
    include '../../conexao.php';

    $nome = $_POST['inputNome'];

    try {
        $inserir = $cn->query(
            "CALL spInsertCargo
                ('$nome');
            ");

        header('location:../../administrador.php');

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>