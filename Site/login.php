<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="./css/style.css">
    <title>Westen | Login</title>
</head>
<body>
    <a id="voltar-home" href="index.php">Voltar<span class="background-voltar"><span></a>
    <div class="body-login">
        <form action="formulario/login-form.php" class="formulario-login" method="POST">
            <div class="formulario-login__campos">
                <h1 class="formulario-login__titulo">Login</h1>
                <input name="inputEmail" type="email" class="formulario-login__input" placeholder="Digite seu e-mail">
                <input name="inputSenha" type="password" class="formulario-login__input" placeholder="Digite sua senha">
                <button type="submit" class="formulario-login__entrar">Entrar</button>  
            </div>
            <div class="formulario-login__logo">
                <img src="img/logo/logo-azul.png" alt="">
            </div>
        </form>
    </div>
</body>
</html>

