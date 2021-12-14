<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_projeto = $_GET['id_projeto'];

    $consulta = $cn->query("SELECT Banner FROM Projeto WHERE ProjetoID = '$id_projeto'");

    $mostraBanner = $consulta->fetch(PDO::FETCH_ASSOC);

    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];
    $cliente = $_POST['selectCliente'];
    $servico = $_POST['selectServico'];

    if($titulo != '' && $descricao != '' && $cliente != '' && $servico != '') {
        $imagem = $_FILES['inputBanner'];
        $destino_imagem = "../../../img/portfolio/";

        if(!empty($imagem['name'])) {
            preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);
            $imagem_nome = md5(uniqid(time())).".".$extencao[1];
            $imagem_nome_excluir = $mostraBanner['Banner'];
            $upload_imagem = 1;

        } else {
            $imagem_nome = $mostraBanner['Banner'];
            $upload_imagem = 0;
        }

        try {
            $alterar = $cn->query(
                "UPDATE Projeto 
                SET
                Descricao = '$descricao',
                Banner = '$imagem_nome',
                Titulo = '$titulo',
                FK_ClienteID = '$cliente',
                FK_TipoServicoID = '$servico'
                WHERE ProjetoID = '$id_projeto'
                ");
            if($upload_imagem == 1) {
                move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);
                unlink($destino_imagem.$imagem_nome_excluir);
            }
            header('location:../../portfolio.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }
?>