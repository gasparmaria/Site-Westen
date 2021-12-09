<?php
    include '../../conexao.php';
    $id_servico = $_GET['id_servico'];

    $consulta = $cn->query(
        "SELECT * FROM Servico 
        INNER JOIN Projeto 
        ON Servico.TipoServicoID = Projeto.FK_TipoServicoID
        WHERE Servico.TipoServicoID = $id_servico;
        ");

    if($consulta->rowCount() == 0) {
        $excluir = $cn->query(
            "DELETE 
            FROM Servico 
            WHERE TipoServicoID = '$id_servico';
            ");
    
        header('location:../../deletar-alterar-servico.php');

    } else {
        header('location:../../erro-crud.php');
    }


?>