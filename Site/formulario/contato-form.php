<?php
    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $nomeEmpresa = $_POST['inputNomeEmpresa'];
    $telefone = $_POST['inputTelefone'];
    $mensagem = $_POST['textAreaMensagem'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    $arquivo = "
      <html>
        <head>
          <style>
            .background-email {
              background: #00baa4;
              padding: 15px;

            }
            p {
              color: #ffffff;
            }
          </style>
        </head>
        <div class='background-email'>
          <p><b>Nome: </b>$nome</p>
          <p><b>E-mail: </b>$email</p>
          <p><b>Nome da empresa: </b>$nomeEmpresa</p>
          <p><b>Telefone: </b>$telefone</p>
          <p><b>Mensagem: </b>$mensagem</p>
          <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
        </div>
      </html>
    ";

    $destino = "contact.westen@gmail.com";
    $assunto = "Contato pelo Site Westen - Formulário Contato";


    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: $nomeEmpresa <$email>";


    if(mail($destino, $assunto, $arquivo, $headers)) {
      header('location:email-enviado.php');
    } else {
      header('location:email-erro.php');
    }
?>