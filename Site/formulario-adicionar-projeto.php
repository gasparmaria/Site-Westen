<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consultaCliente = $cn->query("SELECT * FROM Cliente");
    $consultaServico = $cn->query("SELECT * FROM Servico");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
    <div class="pagina-adicionar-projeto">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Adicionar projeto</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/portfolio/adicionar-projeto-form.php" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Título:</label>
                    <input name="inputTitulo" type="text" class="formulario-administrador__input" required>
                </div>
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Descrição:</label>
                    <textarea name="inputDescricao" type="text" class="formulario-administrador__textarea" required></textarea>
                </div>
                <div class="formulario-administrador__campo-imagem">
                    <input id="arquivo" name="inputBanner" type="file" required>
                    <label for="arquivo" class="formulario-administrador__campo-imagem__label labelFileText">
                        <img src="img/icone-imagem-input-file.png" alt="Ícone arquivo">
                        Escolha uma imagem:
                    </label>
                </div>
                <div class="formulario-administrador__container-select">
                    <select class="formulario-administrador__select" name="selectCliente" required>
                        <option value="" disabled selected>Clientes cadastrados:</option>
                        <?php 
                            while ($mostraCliente = $consultaCliente->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraCliente['Nome']; ?>"><?php echo $mostraCliente['Nome']; ?></option>
                            <?php } ?>
                    </select>   
                    <span class="formulario-administrador__icone-select"></span> 
                </div>
                <div class="formulario-administrador__container-select">
                    <select class="formulario-administrador__select" name="selectServico" required>
                        <option value="" disabled selected>Serviços cadastrados:</option>
                        <?php 
                            while ($mostraServico = $consultaServico->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraServico['NomeServico']; ?>"><?php echo $mostraServico['NomeServico']; ?></option>
                            <?php }?>
                    </select>   
                    <span class="formulario-administrador__icone-select"></span> 
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
            </form>
        </div>
    </div>
        
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>