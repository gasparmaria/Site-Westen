<?php
    include '../../conexao.php';
    $id_cliente = $_GET['id_cliente'];

    $consulta = $cn->query("SELECT * FROM Cliente WHERE Cliente = '$id_cliente'");
    
    $excluir = $cn->query(
        "DELETE 
        FROM Cliente 
        WHERE ClienteID = '$id_cliente';
        ");

    header('location:../../administrador.php');

?>