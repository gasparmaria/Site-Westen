<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_cliente = $_GET['id_cliente'];

    $nome = $_POST['inputNome'];

    if($nome != '') {
        try {
            $alterar = $cn->query(
                "UPDATE Cliente
                SET
                Nome = '$nome'
                WHERE ClienteID = '$id_cliente';
                ");
    
            header('location:../../deletar-alterar-cliente.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }


?>