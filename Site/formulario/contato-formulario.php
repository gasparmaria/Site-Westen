<?php
  //Variáveis
  $nome = $_POST['inputNome'];
  $email = $_POST['inputEmail'];
  $nomeEmpresa = $_POST['inputNomeEmpresa'];
  $mensagem = $_POST['textAreaMensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
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
        <p><b>E-mail: </b>$nomeEmpresa</p>
        <p><b>Mensagem: </b>$mensagem</p>
        <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
      </div>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contact.westen@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nomeEmpresa <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  header('location:email-enviado.php');
?>