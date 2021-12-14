<?php
    include '../../conexao.php';

    $nome = $_POST['inputNome'];

    if($nome != '') {
        try {
            $inserir = $cn->query(
                "CALL spInsertCliente
                    ('$nome');
                ");
    
            header('location:../../administrador.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }


?>