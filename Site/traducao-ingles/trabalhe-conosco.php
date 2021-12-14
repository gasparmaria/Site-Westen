<?php
    session_start();
    include 'conexao.php';

    global $tituloPagina;
    $tituloPagina = "Trabalhe conosco";
    include 'cabecalho_rodape/cabecalho.php'; 
?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <div class="container-conteudo">
            <form class="formulario-trabalhe-conosco" action="formulario/trabalhe-conosco-form.php" method="POST" enctype="multipart/form-data">
                <div class="formulario-trabalhe-conosco__dados-pessoais">
                    <h1 class="formulario-trabalhe-conosco__titulo">Join us</h1>
                    <p class="formulario-trabalhe-conosco__subtitulo">Personal data</p>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputNome" type="text" id="inputNome" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputNome" class="formulario-trabalhe-conosco__label">Name:</label>
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputEmail" type="text" id="inputEmail" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputEmail" class="formulario-trabalhe-conosco__label">Email:</label>
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputCidade" type="text" id="inputCidade" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputCidade" class="formulario-trabalhe-conosco__label">City:</label>
                    </div>
                    <div class="formulario-trabalhe-conosco__container-select">
                        <select class="formulario-trabalhe-conosco__select" name="selectEstado" class="formulario-trabalhe-conosco__select">
                            <option value="" disabled selected>Select your State:</option>
                            <option value="AC/Acre">Acre</option>
                            <option value="AL/Alagoas">Alagoas</option>
                            <option value="AP/Amapá">Amapá</option>
                            <option value="AM/Amazonas">Amazonas</option>
                            <option value="BA/Bahia">Bahia</option>
                            <option value="CE/Ceará">Ceará</option>
                            <option value="DF/Distrito Federal">Distrito Federal</option>
                            <option value="ES/Espírito Santo">Espírito Santo</option>
                            <option value="GO/Goiás">Goiás</option>
                            <option value="MA/Maranhão">Maranhão</option>
                            <option value="MT/Mato Grosso">Mato Grosso</option>
                            <option value="MS/Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="MG/Minas Gerais">Minas Gerais</option>
                            <option value="PA/Pará">Pará</option>
                            <option value="PB/Paraíba">Paraíba</option>
                            <option value="PR/Paraná">Paraná</option>
                            <option value="PE/Pernambuco">Pernambuco</option>
                            <option value="PI/Piauí">Piauí</option>
                            <option value="RJ/Rio de Janeiro">Rio de Janeiro</option>
                            <option value="RN/Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="RS/Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="RO/Rondônia">Rondônia</option>
                            <option value="RR/Roraima">Roraima</option>
                            <option value="SC/Santa Catarina">Santa Catarina</option>
                            <option value="SP/São Paulo">São Paulo</option>
                            <option value="SE/Sergipe">Sergipe</option>
                            <option value="TO/Tocantins">Tocantins</option>
                        </select>   
                        <span class="formulario-trabalhe-conosco__icone-select"></span> 
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputTelefone" type="text" id="inputTelefoneTrabalheConosco" class="formulario-trabalhe-conosco__input inputTelefoneMask" required>
                        <label for="inputTelefone" class="formulario-trabalhe-conosco__label">Telephone:</label>
                    </div> 
                </div>    
                <div class="formulario-trabalhe-conosco__dados-profissionais">
                    <h1 class="formulario-trabalhe-conosco__titulo">Area of ​​interest</h1>
                    <p class="formulario-trabalhe-conosco__subtitulo">Professional data</p>
                    <div class="formulario-trabalhe-conosco__campos">
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Systems Analyst
                            <input name="inputAreaInteresse" value="Analista de Sistemas" type="radio" id="analistaSistemas" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Design
                            <input name="inputAreaInteresse" value="Design" type="radio" id="design" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Back-End Developer
                            <input name="inputAreaInteresse" value="Desenvolvedor Back-End" type="radio" id="desenvolvedorBackEnd" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Front End Developer
                            <input name="inputAreaInteresse" value="Desenvolvedor Front-End" type="radio" id="desenvolvedorFrontEnd" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Database manager
                            <input name="inputAreaInteresse" value="Administrador de Banco de Dados" type="radio" id="administradorBanco" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__curriculo">
                            <p>Envie a nós seu currículo (opcional)</p>
                            <div class="formulario-trabalhe-conosco__curriculo-container">
                                <input id="arquivo" name="arquivo" type="file">
                                <label for="arquivo" class="labelFileText">
                                    <img src="img/trabalhe-conosco/icone-trabalhe-conosco-arquivo.png" alt="Ícone arquivo">
                                    Select your file:
                                </label>
                            </div>
                        </label>
                        <button class="formulario-trabalhe-conosco__buton-submit" type="submit">Send</button>  
                    </div>
                </div>      
                  
            </form>
        </div>
    </main>
    <div class="iframe-container">
        <iframe class="iframe-container__mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.28862947682!2d-46.7286281!3d-23.5209127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605321889136!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script>
        $("#inputTelefoneTrabalheConosco").mask("(00) 00000-0000");
        $('.formulario-trabalhe-conosco').validate({
            rules: {
                inputNome: {
                    required: true
                },
                inputEmail: {
                    required: true,
                    email: true
                },
                inputNomeEmpresa: {
                    required: true
                },
                inputTelefone: {
                    required: true
                },
                textAreaMensagem: {
                    required: true
                },
                inputCidade: {
                    required: true
                },
                selectEstado: {
                    required: true
                },
                inputAreaInteresse: {
                    required: true,
                }
            },
            messages: {
                inputNome: {
                    required: 'Preencha o campo nome.'
                },
                inputEmail: {
                    required: 'Preencha o campo e-mail',
                    email: 'Preencha o campo com um e-mail válido.'
                },
                inputNomeEmpresa: {
                    required: 'Preencha o campo nome da empresa.'
                },
                inputTelefone: {
                    required: 'Preencha o campo telefone.'
                },
                textAreaMensagem: {
                    required: 'Deixe-nos uma mensagem.'
                },
                inputCidade: {
                    required: 'Preencha o campo cidade.'
                },
                selectEstado: {
                    required: 'Por favor, informe sua cidade.'
                },
                inputAreaInteresse: {
                    required: 'Por favor informe uma área de interesse.'
                }
            }
        });
    </script> 
<?php include 'cabecalho_rodape/rodape.php'; ?>