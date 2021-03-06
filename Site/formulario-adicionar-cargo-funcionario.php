<?php
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 

    $consultaCargo = $cn->query("SELECT * FROM Cargo");
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; margin-bottom: 20vh;">
    <div class="pagina-tamanho">
        <div class="container-conteudo">
            <h1 class="formulario-administrador__titulo">Adicionar skill ao funcionário</h1> 
            <hr class="titulo-line">
            <form class="formulario-administrador" action="formulario/funcionario/adicionar-skill-funcionario-form.php" method="POST" enctype="multipart/form-data">
                <div class="formulario-administrador__campo">
                    <label class="formulario-administrador__label">Email do funcionário:</label>
                    <input name="inputEmail" type="text" class="formulario-administrador__input" required>
                </div>
                <div class="formulario-administrador__container-select">
                    <select class="formulario-administrador__select" name="selectSkill" required>
                        <option value="" disabled selected>Skills:</option>
                        <?php 
                            while ($mostraCargo = $consultaCargo->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $mostraCargo['NomeCargo']; ?>"><?php echo $mostraCargo['NomeCargo']; ?></option>
                            <?php } ?>
                    </select>   
                    <span class="formulario-administrador__icone-select"></span> 
                </div>
                <button type="submit" class="formulario-administrador__button-submit">Adicionar</button>
            </form>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
        $('.formulario-administrador').validate({
            rules: {
                inputEmail: {
                    required: true,
                    email: true
                },
                selectSkill: {
                    required: true
                }
            },
            messages: {
                inputEmail: {
                    required: 'Preencha o campo e-mail.',
                    email: 'Preencha o campo com um e-mail válido.'
                },
                selectSkill: {
                    required: 'Selecione uma skill para o funcionário.'
                }
            }
        });
    </script>
<?php include 'cabecalho_rodape/rodape.php'; ?>