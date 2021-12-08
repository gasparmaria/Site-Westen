<?php
    include '../../conexao.php';
    $id_empresa_parceira = $_GET['id_empresa_parceira'];

    $pasta = "../../img/parceiros/";

    $consulta = $cn->query("SELECT * FROM EmpresaParceira WHERE EmpresaParceiraID = '$id_empresa_parceira'");
    
    $mostraProjeto = $consulta->fetch(PDO::FETCH_ASSOC);
    $excluir = $cn->query("DELETE FROM EmpresaParceira WHERE EmpresaParceiraID = '$id_empresa_parceira'");

    $imagem = $mostraProjeto['Logo'];

    if($imagem!='') {
        unlink($pasta.$imagem);
    }

    header('location:../../deletar-alterar-empresa-parceira.php');
?>