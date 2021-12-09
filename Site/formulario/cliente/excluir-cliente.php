<?php
    include '../../conexao.php';
    $id_cliente = $_GET['id_cliente'];

    $consulta = $cn->query(
        "SELECT * FROM Cliente 
        INNER JOIN Projeto 
        ON Cliente.ClienteID = Projeto.FK_ClienteID
        WHERE ClienteID = $id_cliente;
        ");

    if($consulta->rowCount() == 0) {
        $excluir = $cn->query(
            "DELETE 
            FROM Cliente 
            WHERE ClienteID = '$id_cliente';
            ");
    
        header('location:../../deletar-alterar-cliente.php');
    } else {
        header('location:../../erro-crud.php');
    }
    

?>