<?php
    include '../../conexao.php';

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $skill = $_POST['selectSkill'];

    if($nome != '' && $email && $senha != '' && $skill != '') {
        $imagem = $_FILES['inputFoto'];
        $destino_imagem = "../../../img/empresa/funcionarios/";
    
        preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);
    
        $imagem_nome = md5(uniqid(time())).".".$extencao[1];
    
        try {
            $inserirFuncionario = $cn->query(
                "CALL spInsertFuncionario
                    ('$nome',
                    '$email',
                    '$senha',
                    '$imagem_nome');
                ");
    
            move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    
        try {
            $inserirCargo = $cn->query(
            "CALL spInsertFuncionarioCargo
                ('$email',
                '$skill');
            ");
    
            header('location:../../empresa.php');
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        header('location:../../erro-crud.php');
    }
?>