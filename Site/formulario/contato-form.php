<?php
    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $nomeEmpresa = $_POST['inputNomeEmpresa'];
    $telefone = $_POST['inputTelefone'];
    $mensagem = $_POST['textAreaMensagem'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    if($nome != ''
      && $email != ''
      && $nomeEmpresa != ''
      && $telefone != ''
      && $mensagem != '') {
          $arquivo = "
          <html>
            <head>
            <style>
              .background-email {
                background: #1d1d24;
                padding: 15px 30px;
                border-radius: 10px;
              }
              .container-titulo {
                font-size: 25px;
                font-weight: bold;
                letter-spacing: 2px;
                padding: 10px 0;
                border-bottom: 2px solid #fff;
                width: 100%;
              }
              p {
                color: #0cc0c7;
              }
              .color {
                color: #fff;
              }
              a {
                color: #fff !important;
              }
            </style>
            </head>
            <div class='background-email'>
            <div class='container-titulo'><span class='color'>WESTEN</span></div>
              <p><b>Nome: </b><span class='color'>$nome</span></p>
              <p><b>E-mail: </b><span class='color'>$email</span></p>
              <p><b>Nome da empresa: </b><span class='color'>$nomeEmpresa</span></p>
              <p><b>Telefone: </b><span class='color'>$telefone</span></p>
              <p><b>Mensagem: </b><span class='color'>$mensagem</span></p>
              <p>Este e-mail foi enviado em <b><span class='color'>$data_envio</span></b> às <b><span class='color'>$hora_envio</span></b></p>
            </div>
          </html>
        ";
    
        $destino = "contact.westen@gmail.com";
        $assunto = "Contato pelo Site Westen - Formulário Contato";
    
        $headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From: $nomeEmpresa <$email>";
    
        if(mail($destino, $assunto, $arquivo, $headers)) {
          header('location:../../email-enviado.php');
        } else {
          header('location:../../email-erro.php');
        }
    } else {
      header('location:../../email-erro.php');
    }
?>