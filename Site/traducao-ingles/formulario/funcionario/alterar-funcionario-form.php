<?php
    include '../../conexao.php';
    include '../../classes-php/resize-class.php';

    $id_funcionario = $_GET['id_funcionario'];

    $consultaFuncionario = $cn->query("SELECT Foto FROM Funcionario WHERE FuncionarioID = '$id_funcionario'");

    $mostraFoto = $consultaFuncionario->fetch(PDO::FETCH_ASSOC);

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    if($nome != '' && $email != '' && $senha != '') {
        $imagem = $_FILES['inputFoto'];

        $destino_imagem = "../../../img/empresa/funcionarios/";

        if(!empty($imagem['name'])) {
            preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem['name'],$extencao);
            $imagem_nome = md5(uniqid(time())).".".$extencao[1];
            $imagem_nome_excluir = $mostraFoto['Foto'];
            $upload_imagem = 1;

        } else {
            $imagem_nome = $mostraFoto['Foto'];
            $upload_imagem = 0;
        }

        try {
            $alterar = $cn->query(
                "UPDATE Funcionario 
                SET
                NomeFuncionario = '$nome',
                Email = '$email',
                Senha = '$senha',
                Foto = '$imagem_nome'
                WHERE FuncionarioID = '$id_funcionario'
                ");
            if($upload_imagem == 1) {
                move_uploaded_file($imagem['tmp_name'], $destino_imagem.$imagem_nome);
                unlink($destino_imagem.$imagem_nome_excluir);
            }

            header('location:../../deletar-alterar-funcionario.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    } else {
        header('location:../../erro-crud.php');
    }

?>