<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];
    $cliente = $_POST['selectCliente'];
    $servico = $_POST['selectServico'];

    $imagem = $_FILES['inputBanner'];
    $destino_imagem = "../../img/portfolio/";

    preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);

    $imagem_nome = md5(uniqid(time())).".".$extencao[1];

    try {
        $inserir = $cn->query(
            "CALL spInsertProjeto
                ('$descricao',
                '$imagem_nome',
                '$titulo',
                '$cliente',
                '$servico');
            ");
        move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);

        header('location:../../portfolio.php');

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>