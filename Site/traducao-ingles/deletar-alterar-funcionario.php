<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consulta = $cn->query("SELECT * FROM vwExibirFuncionario");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Deletar ou alterar funcionário</h1> 
            <hr class="titulo-line">
            <section class="administrador-portfolio-slider">
                <?php
                    while($listaFuncionario = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="administrador-portfolio-slider__item">
                        <div class="administrador-portfolio-slider__descricao">
                            <h1 class="administrador-portfolio-slider__titulo"><?php echo $listaFuncionario['NomeFuncionario']; ?></h1>
                            <p class="administrador-portfolio-slider__servico"><?php echo str_replace(",", "<br>",$listaFuncionario['NomeCargo']);?></p>
                            <p class="administrador-portfolio-slider__paragrafo">
                                <a href="formulario-alterar-funcionario.php?id_funcionario=<?php echo $listaFuncionario['FuncionarioID'];?>">Alterar</a>
                                <a href="formulario/funcionario/excluir-funcionario.php?id_funcionario=<?php echo $listaFuncionario['FuncionarioID'];?>">Deletar</a>
                            </p>
                        </div>
                        <img class="administrador-portfolio-slider__img" src="../img/empresa/funcionarios/<?php echo $listaFuncionario['Foto']; ?>" alt="">
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>