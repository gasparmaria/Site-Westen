<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consulta = $cn->query("SELECT * FROM vwExibirProjeto");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Deletar ou alterar projeto</h1> 
            <hr class="titulo-line">
            <section class="administrador-portfolio-slider">
                <?php
                    while($listaProjetos = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="administrador-portfolio-slider__item">
                        <div class="administrador-portfolio-slider__descricao">
                            <h1 class="administrador-portfolio-slider__titulo"><?php echo $listaProjetos['Titulo']; ?></h1>
                            <p class="administrador-portfolio-slider__servico"><?php echo $listaProjetos['NomeServico']; ?></p>
                            <p class="administrador-portfolio-slider__paragrafo">
                                <a class="administrador-portflio-slider__deletar-excluir" href="formulario-alterar-projeto.php?id_projeto=<?php echo $listaProjetos['ProjetoID'];?>&id_cliente=<?php echo $listaProjetos['FK_ClienteID'];?>&id_servico=<?php echo $listaProjetos['FK_TipoServicoID'];?>">Alterar</a>
                                <a class="administrador-portflio-slider__deletar-excluir" href="formulario/portfolio/excluir-projeto.php?id_projeto=<?php echo $listaProjetos['ProjetoID'];?>">Deletar</a>
                            </p>
                        </div>
                        <img class="administrador-portfolio-slider__img" src="../img/portfolio/<?php echo $listaProjetos['Banner']; ?>" alt="">
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>