<?php 
    global $tituloPagina;
    $tituloPagina = "Portfólio";
    include 'cabecalho_rodape/cabecalho.php'; 
    include 'conexao.php';
    $consulta = $cn->query("SELECT * FROM vwExibirProjeto");
?>
    <main class="conteudo-pagina-margin-top" style="margin-bottom: 10vh; margin-top: 10vh">
    <h1 class="portifolio-titulo">
        <div class="container-conteudo">
            Conheça alguns dos nossos projetos!
        </div>    
    </h1>
        <div class="container-conteudo">
            <section class="portifolio-slider">
                <?php
                    while($listaProjetos = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="portifolio-slider__item">
                        <div class="portifolio-slider__descricao">
                            <h1 class="portifolio-slider__titulo"><?php echo $listaProjetos['Titulo']; ?></h1>
                            <p class="portifolio-slider__servico"><?php echo $listaProjetos['NomeServico']; ?></p>
                            <p class="portifolio-slider__paragrafo"><?php echo $listaProjetos['Descricao']; ?></p>
                        </div>
                        <img class="portifolio-slider__img" src="img/portfolio/<?php echo $listaProjetos['Banner']; ?>" alt="">
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>  
<?php include 'cabecalho_rodape/rodape.php'; ?>