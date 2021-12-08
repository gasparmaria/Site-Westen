<?php 
    session_start();
    include 'conexao.php';

    global $tituloPagina;
    $tituloPagina = "Parceiros";
    include 'cabecalho_rodape/cabecalho.php'; 
    $consulta = $cn->query("SELECT * FROM EmpresaParceira");
?>
    <main class="conteudo-pagina-margin-top">
        <div class="container-parceiros">
            <img class="container-parceiros__background" src="img/parceiros/background-parceiros-imagem.jpg" alt="">
            <div class="parceiros">
                <?php 
                    while($listaEmpresaParceira = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="parceiros__item">
                            <h1 class="parceiros__empresa"><?php echo $listaEmpresaParceira['NomeEmpresa'];?></h1>
                            <img class="parceiros__imagem" src="img/parceiros/<?php echo $listaEmpresaParceira['Logo'];?>">
                        </div>
                <?php } ?>               
            </div>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>