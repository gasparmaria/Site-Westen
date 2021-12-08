<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <div class="pagina-tamanho">
            <div class="container-conteudo">
                <h1 class="formulario-administrador__titulo">Adicionar empresa parceira</h1> 
                <hr class="titulo-line">
                <form class="formulario-administrador" action="formulario/empresa-parceira/adicionar-empresa-parceira-form.php" method="POST" enctype="multipart/form-data">
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Nome:</label>
                        <input name="inputNome" type="text" class="formulario-administrador__input" required>
                    </div>
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Descrição:</label>
                        <textarea name="inputDescricao" type="text" class="formulario-administrador__textarea" required></textarea>
                    </div>
                    <div class="formulario-administrador__campo-imagem">
                        <input id="arquivo" name="inputLogo" type="file" required>
                        <label for="arquivo" class="formulario-administrador__campo-imagem__label labelFileText">
                            <img src="img/icone-imagem-input-file.png" alt="Ícone arquivo">
                            Escolha uma imagem:
                        </label>
                    </div>
                    <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
                </form>
            </div>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>