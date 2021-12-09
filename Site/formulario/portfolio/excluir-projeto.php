<?php
    include '../../conexao.php';
    $id_projeto = $_GET['id_projeto'];

    $pasta = "../../img/portfolio/";

    $consulta = $cn->query("SELECT * FROM Projeto WHERE ProjetoID = '$id_projeto'");
    
    $mostraProjeto = $consulta->fetch(PDO::FETCH_ASSOC);
    $excluir = $cn->query("DELETE FROM Projeto WHERE ProjetoID = '$id_projeto'");

    $imagem=$mostraProjeto['Banner'];

    if($imagem!='') {
        unlink($pasta.$imagem);
    }

    header('location:../../deletar-alterar-projeto.php');
?>