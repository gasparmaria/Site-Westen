<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="./css/style.css">
    <title>Westen</title>
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
                        <li class="cabecalho-menu__item"><a href="index.php">Home</a><li>
                        <li class="cabecalho-menu__item"><a href="empresa.php">Empresa</a><li>
                        <li class="cabecalho-menu__item"><a href="portifolio.php">Portifólio</a><li>
                        <li class="cabecalho-menu__item"><a href="parceiros.php">Parceiros</a><li>
                        <li class="cabecalho-menu__item"><a href="trabalhe-conosco.php">Trabalhe conosco</a><li>
                        <li class="cabecalho-menu__item"><a href="contato.php">Contato</a><li>
                    </ul>
                    <div class="cabecalho-menu__extend">
                        <label class="label-mode-dark"> 
                            <input type="checkbox" class="input-checkbox-dark">
                            <span class="check-mode-dark"></span>
                        </label>
                        <?php include './svg/bandeiraEstadosUnidos.php' ?>
                        <a href="login.php" class="btn-login">Entrar</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
