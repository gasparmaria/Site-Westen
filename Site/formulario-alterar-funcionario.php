<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $id_funcionario = $_GET['id_funcionario'];
    $consultaFuncionario = $cn->query("SELECT * FROM Funcionario WHERE FuncionarioID = '$id_funcionario'");
    $mostraFuncionario = $consultaFuncionario->fetch(PDO::FETCH_ASSOC);

?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <div class="pagina-tamanho">
            <div class="container-conteudo">
                <h1 class="formulario-administrador__titulo">Alterar funcionário</h1> 
                <hr class="titulo-line">
                <form class="formulario-administrador" action="formulario/funcionario/alterar-funcionario-form.php?id_funcionario=<?php echo $mostraFuncionario['FuncionarioID'];?>" method="POST" enctype="multipart/form-data">
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Nome:</label>
                        <input name="inputNome" type="text" class="formulario-administrador__input" value="<?php echo $mostraFuncionario['NomeFuncionario'];?>" required>
                    </div>
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Email:</label>
                        <input name="inputEmail" type="email" class="formulario-administrador__input" value="<?php echo $mostraFuncionario['Email'];?>" required>
                    </div>
                    <div class="formulario-administrador__campo">
                        <label class="formulario-administrador__label">Senha:</label>
                        <input name="inputSenha" type="text" class="formulario-administrador__input" value="<?php echo $mostraFuncionario['Senha'];?>" required>
                    </div>
                    <div class="formulario-administrador__campo-imagem">
                        <input id="arquivo" name="inputFoto" type="file">
                        <label for="arquivo" class="formulario-administrador__campo-imagem__label labelFileText">
                            <img src="img/icone-imagem-input-file.png" alt="Ícone arquivo">
                            Escolha uma foto:
                        </label>
                    </div>
                    <button type="submit" class="formulario-administrador__button-submit">Alterar</button>
                </form>
            </div>
        </div>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>