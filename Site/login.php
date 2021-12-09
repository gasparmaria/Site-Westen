<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" href="favicon.ico"/>
    <title>Westen | Login</title>
</head>
<body>
    <a id="voltar-home" href="index.php">Voltar<span class="background-voltar"><span></a>
    <div class="body-login">
        <form id="formulario-login-validate" action="formulario/login-form.php" class="formulario-login" method="POST">
            <div class="formulario-login__campos">
                <h1 class="formulario-login__titulo">Login</h1>
                <input name="inputEmail" type="email" class="formulario-login__input" placeholder="Digite seu e-mail" required>
                <input name="inputSenha" type="password" class="formulario-login__input" placeholder="Digite sua senha" required>
                <button type="submit" class="formulario-login__entrar">Entrar</button>  
            </div>
            <div class="formulario-login__logo">
                <img src="img/logo/logo-azul.png" alt="">
            </div>
        </form>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
        $('#formulario-login-validate').validate({
            rules: {
                inputEmail: {
                    required: true,
                    email: true
                },
                inputSenha: {
                    required: true
                }
            },
            messages: {
                inputEmail: {
                    required: 'Preencha o campo e-mail.',
                    email: 'Preencha um email válido'
                },
                inputSenha: {
                    required: 'Preencha o campo senha'
                }
            }
        });
    </script>
</body>
</html>

