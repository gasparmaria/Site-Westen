<?php
    include '../../conexao.php';
    $id_cargo = $_GET['id_cargo'];

    $consulta = $cn->query(
        "SELECT * FROM Cargo
        INNER JOIN FuncionarioCargo 
        ON Cargo.CargoID = FuncionarioCargo.CargoID
        WHERE Cargo.CargoID = $id_cargo;
    ");
    
    // echo $consulta->rowCount();

    if($consulta->rowCount() == 0) {
        $excluir = $cn->query(
            "DELETE 
            FROM Cargo 
            WHERE CargoID = '$id_cargo';
            ");

        header('location:../../deletar-alterar-cargo.php');
    } else {
        header('location:../../erro-crud.php');
    }
?>
