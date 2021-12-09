<?php
    include '../conexao.php';

    session_start();

    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    $consulta = $cn->query(
    "SELECT FuncionarioID, NomeFuncionario, Email, Senha 
        FROM Funcionario
        WHERE Email = '$email' AND Senha = '$senha'
    ");

    if($consulta->rowCount() == 1) {
        $exibeFuncionario = $consulta->fetch(PDO::FETCH_ASSOC);
        if($exibeFuncionario)
        $_SESSION['ID'] = $exibeFuncionario['FuncionarioID'];
        header('location:../index.php');

    } else {
        header('location:../login-erro.php');
    }
?>