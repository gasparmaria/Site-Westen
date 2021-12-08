<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $id_cargo = $_GET['id_cargo'];

    $consultaCargo = $cn->query("SELECT * FROM Cargo WHERE CargoID = '$id_cargo'");
    $mostraCargo = $consultaCargo->fetch(PDO::FETCH_ASSOC);
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 20vh;">
    <div class="pagina-tamanho">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Alterar skill</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/cargo/alterar-cargo-form.php?id_cargo=<?php echo $mostraCargo['CargoID'];?>" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Nome:</label>
                    <input name="inputNome" type="text" class="formulario-administrador__input" value="<?php echo $mostraCargo['NomeCargo']; ?>" required>
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Alterar</button>
            </form>
        </div>
    </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>