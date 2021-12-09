<?php
    $arquivo = $_FILES['arquivo'];
    $nome = $_POST['inputNome'];
    $replyto = $_POST['inputEmail'];
    $cidade = $_POST['inputCidade'];
    $estado = $_POST['selectEstado'];
    $telefone = $_POST['inputTelefone'];
    $cargo = $_POST['inputAreaInteresse'];

    if($nome != ''
      && $replyto != ''
      && $cidade != ''
      && $estado != ''
      && $telefone != ''
      && $cargo != '') {
          $data_envio = date('d/m/Y');
          $hora_envio = date('H:i:s');
      
          $to = "contact.westen@gmail.com";
          $remetente = "$replyto"; 
          $assunto = 'Contato pelo site Westen - Formulário Trabalhe Conosco';
      
          $boundary = "XYZ-" . date("dmYis") . "-ZYX";
          $headers = "MIME-Version: 1.0\n";
          $headers.= "From: $remetente\n";
          $headers.= "Reply-To: $replyto\n";
          $headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
          $headers.= "$boundary\n"; 
      
          $corpo_mensagem = " 
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
            <p><b>E-mail: </b><span class='color'>$replyto</span></p>
            <p><b>Nome da cidade: </b><span class='color'>$cidade</span></p>
            <p><b>Estado: </b><span class='color'>$estado</span></p>
            <p><b>Mensagem: </b><span class='color'>$telefone</span></p>
            <p><b>Cargo: </b><span class='color'>$cargo</span></p>
      
            <p>Este e-mail foi enviado em <b><span class='color'>$data_envio</b> às <b><span class='color'>$hora_envio</span></b></p>
          </div>
          </html>
          ";
      
          if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){

              $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); 
              $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
              $anexo = base64_encode($anexo); 
              fclose($fp); 
              $anexo = chunk_split($anexo); 
              $mensagem = "--$boundary\n"; 
              $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
              $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
              $mensagem.= "$corpo_mensagem\n"; 
              $mensagem.= "--$boundary\n"; 
              $mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
              $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
              $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
              $mensagem.= "$anexo\n";  
              $mensagem.= "--$boundary--\r\n"; 
            }
          else 
          {
          $mensagem = "--$boundary\n"; 
          $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
          $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
          $mensagem.= "$corpo_mensagem\n";
          }
      
          if(mail($to, $assunto, $mensagem, $headers))  {
            header('location:../../email-enviado.php');
          } 
          else {
            header('location:../../email-erro.php');
          }
    } else {
      header('location:../../email-erro.php');
    }
?>