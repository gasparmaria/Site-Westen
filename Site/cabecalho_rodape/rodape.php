    <footer class="rodape">
        <div class="container">
            <div class="rodape-container-fluid">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">HOME</h1>
                    <a class="rodape-item__link" href="#">Planos para mercado</a>
                    <a class="rodape-item__link" href="#">Sistemas</a>
                    <a class="rodape-item__link" href="#">Funcionalidades</a>
                </section>
                <hr class="linha-rodape">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">SUPORTE</h1>
                    <a class="rodape-item__link" href="#">Contato</a>
                </section>
                <hr class="linha-rodape">
                <section class="rodape-item">
                    <h1 class="rodape-item__titulo">EMPRESA</h1>
                    <a class="rodape-item__link" href="#">História</a>
                </section>
                <hr class="linha-rodape">
            </div>
            <section class="rodape-item redes-sociais">
                <div class="rodape-item__info-empresa" style="text-align: center;">
                    <p>R. Guaipá, 678 - Vila Leopoldina, São Paulo - SP, 05089-000</p>
                    <p>Telefone: (11) 3834-4111</p>
                </div>
                <div class="rodape-item__container">
                    <a class="rodape-item__link rodape-icone" href="#">
                        <?php include 'svg/iconeFacebook.php'; ?>
                    </a>

                    <a class="rodape-item__link rodape-icone" href="#">
                        <?php include 'svg/iconeInstagram.php'; ?>
                    </a>

                    <a class="rodape-item__link rodape-icone" href="#">
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
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>