<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consulta = $cn->query("SELECT * FROM EmpresaParceira");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Deletar ou alterar empresa parceira</h1> 
            <hr class="titulo-line">
            <?php while($mostraEmpresa = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <h1 class="container-lista-nome"><?php echo $mostraEmpresa['NomeEmpresa'];?></h1>
                <div class="container-lista" style="margin: 10px auto; width: 80%;">
                    <a  href="formulario-alterar-empresa-parceira.php?id_empresa_parceira=<?php echo $mostraEmpresa['EmpresaParceiraID'];?>">Alterar</a>
                    <a  href="formulario/empresa-parceira/excluir-empresa-parceira.php?id_empresa_parceira=<?php echo $mostraEmpresa['EmpresaParceiraID'];?>">Deletar</a>
                    <p style="padding: 10px;"><?php echo $mostraEmpresa['Descricao'];?></p>
                    <img style="max-width: 70px;" src="../img/parceiros/<?php echo $mostraEmpresa['Logo'] ?>" alt="">
                </div>
                <hr>
            <?php } ?>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>