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
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 20vh;">
    <div class="pagina-tamanho">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Adicionar skill</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/cargo/adicionar-cargo-form.php" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Nome:</label>
                    <input name="inputNome" type="text" class="formulario-administrador__input" required>
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
            </form>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
        $('.formulario-administrador').validate({
            rules: {
                inputNome: {
                    required: true,
                }
            },
            messages: {
                inputNome: {
                    required: 'Preencha o campo nome.'
                }
            }
        });
    </script>
<?php include 'cabecalho_rodape/rodape.php'; ?>