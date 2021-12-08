<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $id_projeto = $_GET['id_projeto'];
    $id_cliente = $_GET['id_cliente'];
    $id_servico = $_GET['id_servico'];

    $consultaProjeto = $cn->query("SELECT * FROM Projeto WHERE ProjetoID = '$id_projeto'");
    $mostraProjeto = $consultaProjeto->fetch(PDO::FETCH_ASSOC);

    $consultaCliente = $cn->query(
        "SELECT ClienteID, Nome 
        FROM Cliente 
        WHERE ClienteID = '$id_cliente'
        UNION
            SELECT ClienteID, Nome 
            FROM Cliente 
            WHERE ClienteID != '$id_cliente'
        ");

    $consultaServico = $cn->query(
        "SELECT TipoServicoID, NomeServico
        FROM Servico
        WHERE TipoServicoID = '$id_servico'
        UNION
            SELECT TipoServicoID, NomeServico
            FROM Servico
            WHERE TipoServicoID != '$id_servico'
        ");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 12vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Alterar projeto</h1> 
            <hr class="titulo-line">
            <div class="formulario-administrador-container-flex">
                <form class="formulario-administrador" action="formulario/portfolio/alterar-projeto-form.php?id_projeto=<?php echo $id_projeto;?>" method="POST" enctype="multipart/form-data">
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Título:</label>
                        <input name="inputTitulo" type="text" class="formulario-administrador__input" value="<?php echo $mostraProjeto['Titulo'];?>" required>
                    </div>
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Descrição:</label>
                        <textarea name="inputDescricao" type="text" class="formulario-administrador__textarea" required><?php echo $mostraProjeto['Descricao'];?></textarea>
                    </div>
                    <div class="formulario-administrador__campo-imagem">
                        <input id="arquivo" name="inputBanner" type="file">
                        <label for="arquivo" class="formulario-administrador__campo-imagem__label labelFileText">
                            <img src="img/icone-imagem-input-file.png" alt="Ícone arquivo">
                            Escolha uma imagem:
                        </label>
                    </div>
                    <div class="formulario-administrador__container-select">
                        <select class="formulario-administrador__select" name="selectCliente" required>
                            <?php
                                while($mostraCliente = $consultaCliente->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraCliente['ClienteID'];?>"><?php echo $mostraCliente['Nome'];?></option>
                            <?php } ?>
                            
                        </select>   
                        <span class="formulario-administrador__icone-select"></span> 
                    </div>
                    <div class="formulario-administrador__container-select">
                        <select class="formulario-administrador__select" name="selectServico" required>
                            <?php
                                while($mostraServico = $consultaServico->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraServico['TipoServicoID'];?>"><?php echo $mostraServico['NomeServico'];?></option>
                            <?php } ?>
                            
                        </select>   
                        <span class="formulario-administrador__icone-select"></span> 
                    </div>
                    <button type="submit" class="formulario-administrador__button-submit">Alterar</button>
                </form>
                <div class="formulario-administrador__container-img">
                    <img class="formulario-administrador__container-imagem" src="img/portfolio/<?php echo $mostraProjeto['Banner'];?>" alt="">
                </div>
            </div>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>