<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $id_servico = $_GET['id_servico'];

    $consultaServico = $cn->query("SELECT * FROM Servico WHERE TipoServicoID = '$id_servico'");
    $mostraServico = $consultaServico->fetch(PDO::FETCH_ASSOC);
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 20vh;">
    <div class="pagina-tamanho">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Adicionar serviço</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/servico/alterar-servico-form.php?id_servico=<?php echo $mostraServico['TipoServicoID'];?>" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Nome:</label>
                    <input value="<?php echo $mostraServico['NomeServico'];?>" name="inputNome" type="text" class="formulario-administrador__input" required>
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
            </form>
        </div>
    </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>