<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consulta = $cn->query("SELECT * FROM Servico");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Deletar ou alterar cliente</h1> 
            <hr class="titulo-line">
            <?php while($mostraServico = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <h1 class="container-lista-nome"><?php echo $mostraServico['NomeServico'];?></h1>
                <div class="container-lista">
                    <a  href="formulario-alterar-servico.php?id_servico=<?php echo $mostraServico['TipoServicoID'];?>">Alterar</a>
                    <a  href="formulario/servico/excluir-servico.php?id_servico=<?php echo $mostraServico['TipoServicoID'];?>">Deletar</a>
                </div>
                <hr>
            <?php } ?>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>