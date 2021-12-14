<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDescricao'];

    if($nome != '' && $descricao != '') {
        $imagem = $_FILES['inputLogo'];
        $destino_imagem = "../../../img/parceiros/";
    
        preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);
    
        $imagem_nome = md5(uniqid(time())).".".$extencao[1];
    
        try {
            $inserir = $cn->query(
                "CALL spInsertEmpresaParceira
                    ('$nome',
                    '$descricao',
                    '$imagem_nome');
                ");
            move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);
    
            header('location:../../parceiros.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }


?>