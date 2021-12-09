<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_empresa_parceira = $_GET['id_empresa_parceira'];

    $consulta = $cn->query("SELECT Logo FROM EmpresaParceira WHERE EmpresaParceiraID = '$id_empresa_parceira'");

    $mostraLogo = $consulta->fetch(PDO::FETCH_ASSOC);

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDescricao'];

    if($nome != '' && $descricao != '') {
        $imagem = $_FILES['inputLogo'];
        $destino_imagem = "../../img/parceiros/";
    
        if(!empty($imagem['name'])) {
            preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);
            $imagem_nome = md5(uniqid(time())).".".$extencao[1];
            $upload_imagem = 1;
    
        } else {
            $imagem_nome = $mostraLogo['Logo'];
            $upload_imagem = 0;
        }
    
        try {
            $alterar = $cn->query(
                "UPDATE EmpresaParceira 
                SET
                NomeEmpresa = '$nome',
                Descricao = '$descricao',
                Logo = '$imagem_nome'
                WHERE EmpresaParceiraID = '$id_empresa_parceira'
                ");
            if($upload_imagem == 1) {
                move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);
            }
            header('location:../../parceiros.php');
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }
?>