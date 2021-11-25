<?php include 'cabecalho_rodape/cabecalho.php'; ?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <form class="formulario-contato" action="formulario/contato-formulario.php" method="POST">
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
<?php include 'cabecalho_rodape/rodape.php'; ?>
