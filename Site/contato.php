<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include 'cabecalho_rodape/cabecalho.php'; 
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <form class="formulario-contato" action="formulario/contato-form.php" method="POST">
            <div class="formulario-contato__conteudo">
                <h1 class="formulario-contato__titulo">
                    Contato
                </h1>
                <div class="formulario-contato__campos">
                    <input name="inputNome" type="text" id="inputNome" class="formulario-contato__input" required>
                    <label for="inputNome" class="formulario-contato__label">Nome:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputEmail" type="text" id="inputEmail" class="formulario-contato__input" required>
                    <label for="inputEmail" class="formulario-contato__label">E-mail:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputNomeEmpresa" type="text" id="inputNomeEmpresa" class="formulario-contato__input" required>
                    <label for="inputNomeEmpresa" class="formulario-contato__label">Empresa:</label>
                </div>
                <div class="formulario-contato__campos">
                    <input name="inputTelefone" type="text" id="inputTelefone" class="formulario-contato__input" required>
                    <label for="inputTelefone" class="formulario-contato__label">Telefone:</label>
                </div>
                <div class="formulario-contato__campos">
                    <label for="contatoTextArea">Mensagem:</label>
                    <textarea class="contato-textarea" name="textAreaMensagem" id="contatoTextArea" cols="30" rows="10"></textarea>
                </div>
                <button class="formulario-contato__button-submit" type="submit"><a class="formulario-contato__link-submit">Enviar</a></button>
            </div>
            <div class="formulario-contato__background-container">
                <img class="formulario-contato__background-container__imagem" src="img/contato/background-contato-imagem.jpg" alt="">
            </div>
        </form>
    </main>
    <div class="iframe-container">
        <iframe class="iframe-container__mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.28862947682!2d-46.7286281!3d-23.5209127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605321889136!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>   
<?php include 'cabecalho_rodape/rodape.php'; ?>
