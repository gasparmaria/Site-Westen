<?php
    include '../../conexao.php';
    $id_servico = $_GET['id_servico'];

    $consulta = $cn->query("SELECT * FROM Servico WHERE TipoServicoID = '$id_servico'");
    
    $excluir = $cn->query(
        "DELETE 
        FROM Servico 
        WHERE TipoServicoID = '$id_servico';
        ");

    header('location:../../deletar-alterar-servico.php');

?>