<?php
    include '../../conexao.php';

    $email = $_POST['inputEmail'];
    $skill = $_POST['selectSkill'];

    try {
        $inserir = $cn->query(
            "CALL spInsertFuncionarioCargo
                ('$email',
                '$skill');
            ");

        header('location:../../empresa.php');

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>