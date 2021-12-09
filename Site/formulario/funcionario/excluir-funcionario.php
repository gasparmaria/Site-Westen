<?php
    include '../../conexao.php';
    $id_funcionario = $_GET['id_funcionario'];

    $pasta = "../../img/empresa/funcionarios/";

    $consulta = $cn->query("SELECT * FROM Funcionario WHERE FuncionarioID = '$id_funcionario'");
    
    $mostraFuncionario = $consulta->fetch(PDO::FETCH_ASSOC);
    $excluir = $cn->query(
        "DELETE 
        FROM FuncionarioCargo 
        WHERE FuncionarioID = '$id_funcionario';
        DELETE 
        FROM Funcionario 
        WHERE FuncionarioID = '$id_funcionario';");

    $imagem = $mostraFuncionario['Foto'];

    if($imagem!='') {
        unlink($pasta.$imagem);
    }

    header('location:../../deletar-alterar-funcionario.php');
?>