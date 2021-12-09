<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_cargo = $_GET['id_cargo'];

    $nome = $_POST['inputNome'];

    if($nome != '') {
        try {
            $alterar = $cn->query(
                "UPDATE Cargo
                SET
                NomeCargo = '$nome'
                WHERE CargoID = '$id_cargo';
                ");
    
            header('location:../../deletar-alterar-cargo.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }
?>