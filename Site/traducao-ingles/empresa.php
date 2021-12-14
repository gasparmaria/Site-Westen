<?php 
    session_start();
    include 'conexao.php';
    
    global $tituloPagina;
    $tituloPagina = "Empresa";
    include 'cabecalho_rodape/cabecalho.php'; 
    $consulta = $cn->query("SELECT * FROM vwExibirFuncionario");
?>
    <main class="conteudo-pagina-margin-top" style="margin-bottom: 10vh;">
        <div class="container-conteudo">
            <section class="empresa-info__item empresa-info__item-background-before">
                <div class="empresa-info__texto empresa-info__flex-item">
                    <h1 class="empresa-info__titulo">
                    History
                        <hr class="empresa-info__titulo-linha">
                    </h1>
                    
                    <p class="empresa-info__paragrafo">
                    Westen, a company founded in November 2020, aims to innovate the market with business management systems, so that it is easy to serve customers with excellence. Based in the capital of São Paulo, we offer systems anywhere in Brazil, which is possible thanks to our full-time, remote support. The excellence in security in our services, with fast maintenance, leaves the client's system with minimal vulnerability to attacks.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item">
                    <?php include 'svg/empresaHistoria.php'; ?>
                </div>
            </section>

            <section class="empresa-info__item empresa-info__item-background-before-invert">
                <div class="empresa-info__texto empresa-info__flex-item">
                <h1 class="empresa-info__titulo">
                Values
                    <hr class="empresa-info__titulo-linha-invert">
                </h1>
                    <p class="empresa-info__paragrafo">
                    Designing works with: respect, quality, union, critical attitude, didactic constructivism, integrity, innovation and excellence are just some of our values. Values ​​that move us every day to fulfill our purposes and objectives related to Westen.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item empresa-info__imagem-order">
                    <?php include 'svg/empresaValores.php'; ?>
                </div>
            </section>

            <section class="empresa-info__item  empresa-info__item-background-before">
                <div class="empresa-info__texto empresa-info__flex-item">
                <h1 class="empresa-info__titulo">
                Eyesight
                    <hr class="empresa-info__titulo-linha">
                </h1>
                    <p class="empresa-info__paragrafo">
                    Create the future by providing security and privacy for everyone. Lead, grow and disseminate technology throughout Brazil. Accomplish achievements and always design applications, software and websites with excellence.
                    </p>
                </div>
                <div class="empresa-info__imagem empresa-info__flex-item">
                    <?php include 'svg/empresaVisao.php'; ?>
                </div>
            </section>
        </div>

        <div class="container-titulo-secao">
            <h1>Qualities</h1>
        </div>

        <div class="container-conteudo empresa-qualidade">
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Multidisciplinary<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                
                <p class="empresa-qualidade__texto">
                For a company that is up-to-date in the market, nothing is more important than having multidisciplinary employees, capable of transforming theory into practice and knowing how to deal with different applications in different contexts, innovating and doing different jobs.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Creativity<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                Being able to turn new and original ideas into reality, far beyond just thinking, it's necessary to be creative to truly make a difference and produce a diversified work, that's what Westen proposes.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Patience<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                Possessing maturity, observing the situation from the point of view of the "adversary", thinking before starting a speech and not looking for blame are some characteristics of those who are patient, a fundamental quality in the planning and development process of any work.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">High performance<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                Much more than doing a good job, it is necessary to have high performance in our applications to exceed expectations and retain our customers. Each of the members believes in the company's purpose and is always seeking to improve their knowledge and skills.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Team work<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                Working in a team is having several different people striving for an equal and common goal. And for the work to have good results, it is essential that everyone, Westen members, do their best.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Updated<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                All knowledge and skills acquired over time are worthless if they are not aligned with the market and the real needs of our customers, because of this, Westen is a company that always seeks to understand how the market behaves and at which points need to focus.
                </p>
            </section>
        </div>

        <div class="container-titulo-secao">
            <h1>Languages ​​and Technologies</h1>
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
            <h1>Employees</h1>
        </div>

        <section class="empresa-funcionarios">
            <div class="container-conteudo">
                <?php
                    while($listaFuncionarios = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="empresa-funcionario__item">
                        <div class="empresa-funcionario__container-img">
                            <img class="empresa-funcionario__img" src="../img/empresa/funcionarios/<?php echo $listaFuncionarios['Foto'];?>">
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