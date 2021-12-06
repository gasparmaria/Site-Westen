<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php
        include 'conexao.php';
        $consulta = $cn->query('SELECT * FROM EmpresaParceira');

        while($listaEmpresaParceira = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo $listaEmpresaParceira['NomeEmpresa'].'<br>';
            echo $listaEmpresaParceira['Descricao'].'<br>';
            echo '<hr/>';
        }
    ?>
</body>
</html>
