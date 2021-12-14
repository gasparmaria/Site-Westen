    <footer class="rodape">
        <div class="container">
            <div class="rodape-container-fluid">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">CONHEÇA-NOS</h1>
                    <a class="rodape-item__link" href="portfolio.php">Projetos</a>
                    <a class="rodape-item__link" href="index.php">Características gerais</a>
                </section>
                <hr class="linha-rodape">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">SUPORTE</h1>
                    <a class="rodape-item__link" href="contato.php">Contato</a>
                </section>
                <hr class="linha-rodape">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">EMPRESA</h1>
                    <a class="rodape-item__link" href="empresa.php">História</a>
                </section>
                <hr class="linha-rodape">
            </div>
            <section class="rodape-item redes-sociais">
                <div class="rodape-item__info-empresa" style="text-align: center;">
                    <p>R. Guaipá, 678 - Vila Leopoldina, São Paulo - SP, 05089-000</p>
                    <p>Telefone: (11) 3834-4111</p>
                </div>
                <div class="rodape-item__container">
                    <a class="rodape-item__link rodape-icone" href="https://www.facebook.com/Westen-112779670586108/?view_public_for=112779670586108">
                        <?php include 'svg/iconeFacebook.php'; ?>
                    </a>

                    <a class="rodape-item__link rodape-icone" href="https://www.instagram.com/westen_ds/?hl=pt-br">
                        <?php include 'svg/iconeInstagram.php'; ?>
                    </a>

                    <a class="rodape-item__link rodape-icone" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGb3r2hNuF1zAAAAX2eAHWQvoDvI_a9HsTpCibgrD6SU9gARYo75JLDp0DbX19yFa89XQsuViYyfIIrOHI9aUEluQtERhy2dswTCzsZBOmuqungoMXXJ50z_7n6ISvx2Vn6_Wk=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fwesten-technology-43b6711b8">
                        <?php include 'svg/iconeLinkedIn.php'; ?>
                    </a>

                    <a class="rodape-item__link rodape-icone" href="mailto:contact.westen@gmail.com" subject="Comunicado">
                        <?php include 'svg/iconeGmail.php'; ?>
                    </a>
                </div>
            </section>
        </div>
        <div class="container-conteudo">
            <hr class="linha-copyright" style="width:100%;">
        </div>
        <div class="container">
            <div class="container-copyright">
                <span class="copyright">Copyright &copy;<?php $date = date('Y'); echo $date; ?> - Todos os diretos reservados</span>
                <span class="termos-de-uso"><a href="#">Termos de uso</a</span>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>