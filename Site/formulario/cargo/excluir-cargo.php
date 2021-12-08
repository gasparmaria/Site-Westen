<?php
    include '../../conexao.php';
    $id_cargo = $_GET['id_cargo'];

    $consulta = $cn->query("SELECT * FROM Cargo WHERE CargoID = '$id_cargo'");
    
    $excluir = $cn->query(
        "DELETE 
        FROM Cargo 
        WHERE CargoID = '$id_cargo';
        ");

    header('location:../../administrador.php');

?>
