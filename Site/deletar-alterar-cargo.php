<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consulta = $cn->query("SELECT * FROM Cargo");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 10vh;">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Deletar ou alterar skill</h1> 
            <hr class="titulo-line">
            <?php while($mostraCargo = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <h1 class="container-lista-nome"><?php echo $mostraCargo['NomeCargo'];?></h1>
                <div class="container-lista">
                    <a  href="formulario-alterar-cargo.php?id_cargo=<?php echo $mostraCargo['CargoID'];?>">Alterar</a>
                    <a  href="formulario/cargo/excluir-cargo.php?id_cargo=<?php echo $mostraCargo['CargoID'];?>">Deletar</a>
                </div>
                <hr>
            <?php } ?>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>