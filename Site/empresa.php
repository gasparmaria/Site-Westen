<?php 
    global $tituloPagina;
    $tituloPagina = "Empresa";
    include 'cabecalho_rodape/cabecalho.php'; 
    include 'conexao.php';
    $consulta = $cn->query("SELECT * FROM vwExibirFuncionario");
?>
    <main class="conteudo-pagina-margin-top" style="margin-bottom: 10vh;">
        <div class="container-conteudo">
            <section class="empresa-info__item empresa-info__item-background-before">
                <div class="empresa-info__texto empresa-info__flex-item">
                    <h1 class="empresa-info__titulo">
                        História
                        <hr class="empresa-info__titulo-linha">
                    </h1>
                    
                    <p class="empresa-info__paragrafo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam modi inventore maiores commodi sit aliquid. Possimus eum fugit animi, voluptates corporis in quam quae debitis expedita saepe nemo magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ut eum voluptatum unde minima modi veniam ipsa. Consequatur, eius officiis! Natus commodi exercitationem, ullam aspernatur aliquam at repudiandae ipsum fuga.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item">
                    <?php include 'svg/empresaHistoria.php'; ?>
                </div>
            </section>

            <section class="empresa-info__item empresa-info__item-background-before-invert">
                <div class="empresa-info__texto empresa-info__flex-item">
                <h1 class="empresa-info__titulo">
                    Valores
                    <hr class="empresa-info__titulo-linha-invert">
                </h1>
                    <p class="empresa-info__paragrafo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam modi inventore maiores commodi sit aliquid. Possimus eum fugit animi, voluptates corporis in quam quae debitis expedita saepe nemo magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ut eum voluptatum unde minima modi veniam ipsa. Consequatur, eius officiis! Natus commodi exercitationem, ullam aspernatur aliquam at repudiandae ipsum fuga.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item empresa-info__imagem-order">
                    <?php include 'svg/empresaValores.php'; ?>
                </div>
            </section>

            <section class="empresa-info__item  empresa-info__item-background-before">
                <div class="empresa-info__texto empresa-info__flex-item">
                <h1 class="empresa-info__titulo">
                    Visão
                    <hr class="empresa-info__titulo-linha">
                </h1>
                    <p class="empresa-info__paragrafo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam modi inventore maiores commodi sit aliquid. Possimus eum fugit animi, voluptates corporis in quam quae debitis expedita saepe nemo magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ut eum voluptatum unde minima modi veniam ipsa. Consequatur, eius officiis! Natus commodi exercitationem, ullam aspernatur aliquam at repudiandae ipsum fuga.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item">
                    <?php include 'svg/empresaVisao.php'; ?>
                </div>
            </section>
        </div>

        <div class="container-titulo-secao">
            <h1>Qualidades</h1>
        </div>

        <div class="container-conteudo empresa-qualidade">
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Multidisciplinares<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Criatividade<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Paciência<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Alta performance<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Trabalho em Equipe<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Atualizados<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam quia incidunt voluptatibus laboriosam quae? Temporibus ipsa, odit, minus consequuntur autem neque, doloribus dolorem nihil maiores laborum maxime excepturi odio omnis.
                </p>
            </section>
        </div>

        <div class="container-titulo-secao">
            <h1>Linguagens e Tecnologias</h1>
        </div>

        <div class="recursos-usados">
            <div class="container-conteudo">
                <img src="img/empresa/css-empresa-imagem.png">
                <img src="img/empresa/html-empresa-imagem.png">
                <img src="img/empresa/javascript-empresa-imagem.png">
                <img src="img/empresa/php-empresa-imagem.png">
                <img src="img/empresa/csharp-empresa-imagem.png">
                <img src="img/empresa/github-empresa-imagem.png">
                <img src="img/empresa/android-empresa-imagem.png">
                <img src="img/empresa/mysql-empresa-imagem.png">
            </div>
        </div>

        <div class="container-titulo-secao">
            <h1>Funcionários</h1>
        </div>

        <section class="empresa-funcionarios">
            <div class="container-conteudo">
                <?php
                    while($listaFuncionarios = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="empresa-funcionario__item">
                        <div class="empresa-funcionario__container-img">
                            <img class="empresa-funcionario__img" src="img/empresa/funcionarios/<?php echo $listaFuncionarios['Foto'];?>">
                        </div>
                        <div class="empresa-funcionario__texto">
                            <h1 class="empresa-funcionario__nome"><?php echo $listaFuncionarios['NomeFuncionario'];?></h1>
                            <p style="font-weight: bold; color: #0cc1c8; margin-top: 5px">Skills: </p>
                            <p class="empresa-funcionario__cargo"><?php echo str_replace(",", "<br>",$listaFuncionarios['NomeCargo']);?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
<?php include 'cabecalho_rodape/rodape.php'; ?>