<?php 
    session_start();
    include 'conexao.php';

    global $tituloPagina;
    $tituloPagina = "Contato";
    include 'cabecalho_rodape/cabecalho.php'; 
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <form class="formulario-contato" action="formulario/contato-form.php" method="POST">
            <div class="formulario-contato__conteudo">
                <h1 class="formulario-contato__titulo">
                Contact
                </h1>
                <div class="formulario-contato__campos">
                    <input name="inputNome" type="text" id="inputNome" class="formulario-contato__input" required>
                    <label for="inputNome" class="formulario-contato__label">Name:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputEmail" type="text" id="inputEmail" class="formulario-contato__input" required>
                    <label for="inputEmail" class="formulario-contato__label">Email:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputNomeEmpresa" type="text" id="inputNomeEmpresa" class="formulario-contato__input" required>
                    <label for="inputNomeEmpresa" class="formulario-contato__label">Company:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputTelefone" type="text" id="inputTelefoneContato" class="formulario-contato__input inputTelefoneMask" required>
                    <label for="inputTelefone" class="formulario-contato__label">Telefone:</label>
                </div>
                <div class="formulario-contato__campos">
                    <label for="contatoTextArea">Message:</label>
                    <textarea class="contato-textarea" name="textAreaMensagem" id="contatoTextArea" cols="30" rows="10"></textarea>
                </div>
                <button class="formulario-contato__button-submit" type="submit"><a class="formulario-contato__link-submit">Send</a></button>
            </div>
            <div class="formulario-contato__background-container">
                <img class="formulario-contato__background-container__imagem" src="img/contato/background-contato-imagem.jpg" alt="">
            </div>
        </form>
    </main>
    <div class="iframe-container">
        <iframe class="iframe-container__mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.28862947682!2d-46.7286281!3d-23.5209127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605321889136!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>  
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script>
        $("#inputTelefoneContato").mask("(00) 00000-0000");
        $('.formulario-contato').validate({
            rules: {
                inputNome: {
                    required: true
                },
                inputEmail: {
                    required: true,
                    email: true
                },
                inputNomeEmpresa: {
                    required: true
                },
                inputTelefone: {
                    required: true
                },
                textAreaMensagem: {
                    required: true
                }
            },
            messages: {
                inputNome: {
                    required: 'Preencha o campo nome.'
                },
                inputEmail: {
                    required: 'Preencha o campo e-mail',
                    email: 'Preencha o campo com um e-mail válido.'
                },
                inputNomeEmpresa: {
                    required: 'Preencha o campo nome da empresa.'
                },
                inputTelefone: {
                    required: 'Preencha o campo telefone.'
                },
                textAreaMensagem: {
                    required: 'Deixe-nos uma mensagem.'
                }
            }
        });
    </script> 
<?php include 'cabecalho_rodape/rodape.php'; ?>
