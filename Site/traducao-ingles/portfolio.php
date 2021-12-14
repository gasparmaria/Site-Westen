<?php 
    session_start();
    include 'conexao.php';

    global $tituloPagina;
    $tituloPagina = "Portfólio";
    include 'cabecalho_rodape/cabecalho.php'; 
    $consulta = $cn->query("SELECT * FROM vwExibirProjeto");
?>
    <main class="conteudo-pagina-margin-top" style="margin-bottom: 10vh; margin-top: 10vh">
    <h1 class="portfolio-titulo">
        <div class="container-conteudo">
        Discover some of our projects!
        </div>    
    </h1>
        <div class="container-conteudo">
            <section class="portfolio-slider">
                <?php
                    while($listaProjetos = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="portfolio-slider__item">
                        <div class="portfolio-slider__descricao">
                            <h1 class="portfolio-slider__titulo"><?php echo $listaProjetos['Titulo']; ?></h1>
                            <p class="portfolio-slider__servico"><?php echo $listaProjetos['NomeServico']; ?></p>
                            <p class="portfolio-slider__paragrafo"><?php echo $listaProjetos['Descricao']; ?></p>
                        </div>
                        <img class="portfolio-slider__img" src="../img/portfolio/<?php echo $listaProjetos['Banner']; ?>" alt="">
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>  
<?php include 'cabecalho_rodape/rodape.php'; ?>