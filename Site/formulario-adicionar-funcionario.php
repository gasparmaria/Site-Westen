<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php';

    $consultaCargo = $cn->query("SELECT * FROM Cargo");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
    <div class="pagina-tamanho">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Adicionar funcionário</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/funcionario/adicionar-funcionario-form.php" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Nome:</label>
                    <input name="inputNome" type="text" class="formulario-administrador__input" required>
                </div>
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Email:</label>
                    <input name="inputEmail" type="email" class="formulario-administrador__input" required>
                </div>
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Senha:</label>
                    <input name="inputSenha" type="password" class="formulario-administrador__input" required>
                </div>
                <div class="formulario-administrador__container-select" style="margin-bottom: 20px;">
                    <select class="formulario-administrador__select" name="selectSkill" required>
                        <option value="" disabled selected>Skills:</option>
                        <?php 
                            while ($mostraCargo = $consultaCargo->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraCargo['NomeCargo']; ?>"><?php echo $mostraCargo['NomeCargo']; ?></option>
                            <?php } ?>
                    </select>   
                    <span class="formulario-administrador__icone-select"></span> 
                </div>
                <div class="formulario-administrador__campo-imagem">
                    <input id="arquivo" name="inputFoto" type="file" required>
                    <label for="arquivo" class="formulario-administrador__campo-imagem__label labelFileText">
                        <img src="img/icone-imagem-input-file.png" alt="Ícone arquivo">
                        Escolha uma foto:
                    </label>
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
            </form>
        </div>
    </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>