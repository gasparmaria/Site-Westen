<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Westen - Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100vw;
            height: 100vh;
            
        }

        .formulario-login {
            background-color: rgb(49, 49, 49);
            border-radius: 10px;
            display: flex;
            padding: 100px 30px;
            justify-content: space-around;
            align-items: stretch;
            width: 50%;
            flex-wrap: wrap;
        }

        .formulario-login__titulo {
            margin: 0;
            padding: 0;
            color: white;
        }

        .formulario-login__input {
            background: none;
            color: #fff;
            margin: 0 auto;
            display: block;
            border: none;
            outline: none;
            border-bottom: 2px solid #fff;
            width: 100%;
            padding: 10px;
            margin-top: 25px;
        }

        .formulario-login__entrar {
            border: none;
            text-align: center;
            outline: none;
            padding: 15px 30px;
            display: block;
            margin: 0 auto;
            margin-top: 50px;
            cursor: pointer;
            color: #fff;
            background: none;
            border: 2px solid rgb(12,193,200);
            font-size: 16px;
            
        }

        .formulario-login__campos {
            width: 250px;
            text-align: left;
            
        }

        .formulario-login__logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario-login__logo img {
            width: 150px;
            display: block;
        }

        @media (max-width: 919px) {
            .formulario-login__logo {
                order: -1;
                margin-bottom: 30px;
            }

            .formulario-login__logo img {
            width: 125px;
            display: block;
            }

            .formulario-login {
            width: 80%;
            }
        }



    </style>
</head>
<body>
    <form action="formulario/login.php" class="formulario-login" method="POST">
        <div class="formulario-login__campos">
            <h1 class="formulario-login__titulo">LOGIN</h1>
            <input type="text" class="formulario-login__input" placeholder="Digite seu e-mail">
            <input type="password" class="formulario-login__input" placeholder="Digite sua senha">
            <button type="submit" class="formulario-login__entrar">Entrar</button>  
        </div>
        <div class="formulario-login__logo">
            <img src="logo-azul.png" alt="">
        </div>
    </form>
</body>
</html>
