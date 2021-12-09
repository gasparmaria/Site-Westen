<?php
    include '../../conexao.php';

    $email = $_POST['inputEmail'];
    $skill = $_POST['selectSkill'];

    if($email != '' && $skill != '') {
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

    } else {
        header('location:../../erro-crud.php');
    }


?>