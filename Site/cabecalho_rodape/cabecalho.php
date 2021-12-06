<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="styleSheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" href="favicon.ico"/>
    <?php
        $tituloEmpresa = "Westen";
        global $tituloPagina;
        if($tituloPagina != '') {
            $tituloEmpresa .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $tituloEmpresa; ?></title>
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <nav class="nav-menu">
                <div class="container-logo">
                    <a class="logo" href="index.php">
                        <img class="logo-empresa" src="./img/logo/logo-azul.png" alt="Logo da empresa">
                    </a>
                </div>
                <div class="menu-hamburguer">
                    <div class="menu-hamburguer__linha1"></div>
                    <div class="menu-hamburguer__linha2"></div>
                    <div class="menu-hamburguer__linha3"></div>
                </div>
                <div class="cabecalho-menu">
                    <ul class="cabecalho-menu__lista">
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == '' ? 'link-active' : '' ?>" href="index.php">Home</a><li>
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == 'Empresa' ? 'link-active' : '' ?>" href="empresa.php">Empresa</a><li>
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == 'Portfílio' ? 'link-active' : '' ?>" href="portifolio.php">Portfólio</a><li>
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == 'Parceiros' ? 'link-active' : '' ?>" href="parceiros.php">Parceiros</a><li>
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == 'Trabalhe conosco' ? 'link-active' : '' ?>" href="trabalhe-conosco.php">Trabalhe conosco</a><li>
                        <li class="cabecalho-menu__item"><a class="<?php echo $tituloPagina == 'Contato' ? 'link-active' : '' ?>" href="contato.php">Contato</a><li>
                    </ul>
                    <div class="cabecalho-menu__extend">
                        <label class="label-mode-dark"> 
                            <input type="checkbox" class="input-checkbox-dark">
                            <span class="check-mode-dark"></span>
                        </label>
                        <?php include './svg/bandeiraEstadosUnidos.php' ?>

                        <?php
                            if(empty($_SESSION['ID'])) { ?>
                            <a href="login.php" class="btn-login-sair">Entrar</a>
                        <?php } else { 
                            $consultaFuncionario = $cn->query(
                                "SELECT NomeFuncionario 
                                    FROM Funcionario 
                                    WHERE FuncionarioID = '$_SESSION[ID]'");
                            $mostraFuncionario = $consultaFuncionario->fetch(PDO::FETCH_ASSOC)
                        ?>
                            <a href="#" style="border: none; cursor: default; background: none;" class="btn-login-sair"><img src="./img/icone-cabecalho-usuario.png" alt=""><?php echo $mostraFuncionario['NomeFuncionario']?></a>
                            <a style="border: 2px solid gray; color: gray; background: none;" href="sair.php" class="btn-login-sair"><img style="width: 20px" src="./img/icone-cabecalho-logoff.png" alt="">Sair</a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
