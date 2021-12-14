<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_servico = $_GET['id_servico'];

    $nome = $_POST['inputNome'];

    if($nome != '') {
        try {
            $alterar = $cn->query(
                "UPDATE Servico
                SET
                NomeServico = '$nome'
                WHERE TipoServicoID = '$id_servico';
                ");
    
            header('location:../../deletar-alterar-servico.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
?>