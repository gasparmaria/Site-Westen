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
                        História
                        <hr class="empresa-info__titulo-linha">
                    </h1>
                    
                    <p class="empresa-info__paragrafo">
                        A Westen, empresa fundada em novembro de 2020, tem como objetivo inovar o mercado com sistemas de gerenciamento de negócios, de forma com que seja fácil atender clientes com excelência. Com sede na capital de São Paulo, oferecemos sistemas para qualquer lugar do Brasil, o que é possível graças ao nosso suporte remoto e em período integral. A excelência na segurança em nossos serviços, com rápida manutenção, deixa o sistema do cliente com mínimas vulnerabilidades a ataques.
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
                        Projetar trabalhos com: respeito, qualidade, união, atitude crítica, didática
                        construtivismo, integridade, inovação e execelência são apenas alguns do nossos valores. Valores estes que nos movem cada dia para cumprir nossos propósitos e objetivos relacionados a Westen.
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
                        Criar o futuro, provendo segurança e privacidade a todos. Liderar, crescer e disseminar a tecnologia em todo o Brasil. Realizar conquistas e sempre projetar aplicações, softwares e sites com execelência.
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
                    Para uma empresa que é atualizada no mercado, nada mais importante do que ter funcionários multidisplinares, capazes de transformar a teoria em prática e saber lidar com diversas aplicações em diferentes contextos, inovando e fazendo trabalhos diversificados.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Criatividade<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Ser capaz de transformar ideias novas e originais em realidade, muito além de apenas pensar, é necessário ser criativo para verdadeiramente fazer a diferença e produzir um trabalho diversificado, é isso que a Westen propõe.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Paciência<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Possuir maturidade, observar a situação do ponto de vista do "adversário", pensar antes de começar uma discursão e não procurar culpados, são algumas características daqueles que são pacientes, qualidade fundamental no processo de planejamento e desenvolvimento de qualquer trabalho.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Alta performance<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Muito mais do que fazer um bom trabalho, é necessário ter alta performance em nossas aplicações para superar as expectativas e fidelizar nossos clientes. Cada um dos integrates acreditando no propósito da empresa e buscando sempre aprimorar seus conhecimentos e habilidades.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Trabalho em Equipe<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                Trabalhar em equipe é ter várias pessoas diferentes lutando por um objetivo igual e comum. E para que o trabalho tenha bons resultados, é fundamental que cada um, membros da Westen, deem o seu melhor.
                </p>
            </section>
            <section class="empresa-qualidade__item">
                <h1 class="empresa-qualidade__titulo">Atualizados<img class="checkmark" src="img/empresa/imagem-checkmark.png" alt="Check mark"></h1>
                <p class="empresa-qualidade__texto">
                    Todo conhecimento e habilidades adquiridos ao longo do tempo não valem de nada se não estiverem alinhados com o mercado e a real necessidade dos nossos clientes, por conta disso, a Westen é uma empresa que busca sempre entender como o mercado se comporta e em quais pontos precisa focar.
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