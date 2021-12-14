<?php
    session_start();
    include 'conexao.php';
    include 'cabecalho_rodape/cabecalho.php';
   
?>
    <main style="margin-bottom: 10vh;">
        <div class="container-header-home">
            <div class="container-conteudo">
                <div class="container-header-home__texto header-home__flex-item">
                    <h1>Westen</h1>
                    <p>Programmed to innovate</p>
                </div> 
                <div class="container-header-home__img header-home__flex-item">
                    <img src="img/home/programando-home-imagem.png" alt="">
                </div>
            </div> 
            <svg class="header-home-svg" xmlns="http://www.w3.org/2000/svg" viewBox="250 0 640 350">
                <path fill-opacity="1" d="M0,320L30,314.7C60,309,120,299,180,293.3C240,288,300,288,360,277.3C420,267,480,245,540,208C600,171,660,117,720,122.7C780,128,840,192,900,186.7C960,181,1020,107,1080,96C1140,85,1200,139,1260,186.7C1320,235,1380,277,1410,298.7L1440,320L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
            </svg>
        </div> 
        <section class="container-conteudo">
            <div class="container-cards-home">
                <div class="cards-home__item">
                    <div class="cards-home__item-imagem">
                        <img src="img/home/icone_computador.png">
                    </div>    
                    <h1 class="cards-home__item-titulo">Applications and software
</h1>
                    <p class="cards-home__item-texto">
                    The software is designed to do the hard work, and you'll find it easy to use. Have an optimized, safe and intuitive software.

                    </p>    
                </div>

                <div class="cards-home__item">
                    <div class="cards-home__item-imagem">
                        <img src="img/home/icone_diamante.png">
                    </div>    
                    <h1 class="cards-home__item-titulo">Unique Designs
</h1>
                    <p class="cards-home__item-texto">
                    We value not only the functionality of the application, as well as the various visual aspects, implemented to improve the user experience as much as possible.
                    </p>    
                </div>

                <div class="cards-home__item">
                    <div class="cards-home__item-imagem">
                        <img src="img/home/icone_circuito.png">
                    </div>    
                    <h1 class="cards-home__item-titulo">Best Technology</h1>
                    <p class="cards-home__item-texto">
                    Using the best resources and best practices, we guarantee performance, safety and quality to the final product. We address broad needs by providing flexible systems and services that are easy to maintain.

                    </p>    
                </div>

            </div>
        </section>
    </main>
    
<?php include 'cabecalho_rodape/rodape.php'; ?>