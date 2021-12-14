<?php 
    session_start();
    include 'conexao.php';

    if(empty($_SESSION['ID'])) {
        header('location:index.php');
    }

    global $tituloPagina;
    $tituloPagina = "Área do administrador";
    include 'cabecalho_rodape/cabecalho.php'; 
?>
    <main class="conteudo-pagina-margin-top" style="margin-bottom: 10vh; margin-top: 10vh">
        <h1 class="painel-administrador__titulo">
            <div class="container-conteudo">
                Painel administrativo
            </div>    
        </h1>
        <div class="container-conteudo">
            <hr class="titulo-line">
        </div>
        <section class="container-conteudo">
            <div class="container-cards-administracao">
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Projeto</h1> 
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-projeto.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-projeto.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Skill</h1> 
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-cargo.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-cargo.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Serviço</h1> 
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-servico.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-servico.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Empresa parceira</h1>
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-empresa-parceira.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-empresa-parceira.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Cliente</h1> 
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-cliente.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-cliente.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                    </div>
                </div>  
                <div class="cards-administracao__item">
                    <h1 class="cards-administracao__titulo">Funcionário</h1> 
                    <hr>
                    <div class="cards-administracao__container-link">
                        <a class="cards-administracao__link" href="formulario-adicionar-funcionario.php">Adicionar<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                        <a class="cards-administracao__link" href="deletar-alterar-funcionario.php">Alterar / Excluir<i style="margin-left: 7px;" class="fas fa-times-circle"></i></a>
                        <a class="cards-administracao__link" href="formulario-adicionar-cargo-funcionario.php">Adicionar skill<i style="margin-left: 7px;" class="fas fa-plus"></i></a>
                    </div>
                </div>            
            </div>
        </section>
    </main>  
<?php include 'cabecalho_rodape/rodape.php'; ?>