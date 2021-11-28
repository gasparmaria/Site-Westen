<?php include 'cabecalho_rodape/cabecalho.php'; ?>
    <main class="conteudo-pagina-margin-top" style="margin-top: 10vh; ">
        <div class="container-conteudo">
            <form class="formulario-trabalhe-conosco" action="formulario/trabalhe-conosco-form.php" method="POST">
                <div class="formulario-trabalhe-conosco__dados-pessoais">
                    <h1 class="formulario-trabalhe-conosco__titulo">Junte-se à nós</h1>
                    <p class="formulario-trabalhe-conosco__subtitulo">Dados pessoais</p>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputNome" type="text" id="inputNome" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputNome" class="formulario-trabalhe-conosco__label">Nome:</label>
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputEmail" type="text" id="inputEmail" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputEmail" class="formulario-trabalhe-conosco__label">E-mail:</label>
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputCidade" type="text" id="inputCidade" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputCidade" class="formulario-trabalhe-conosco__label">Cidade:</label>
                    </div>
                    <div>
                        <select name="selectEstado" class="formulario-trabalhe-conosco__select">
                            <option value="" disabled selected>Selecione seu Estado:</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="São Paulo">São Paulo</option>
                        </select>    
                    </div>
                    <div class="formulario-trabalhe-conosco__campos">
                        <input name="inputTelefone" type="text" id="inputTelefone" class="formulario-trabalhe-conosco__input" required>
                        <label for="inputTelefone" class="formulario-trabalhe-conosco__label">Telefone:</label>
                    </div> 
                </div>    
                <div class="formulario-trabalhe-conosco__dados-profissionais">
                    <h1 class="formulario-trabalhe-conosco__titulo">Área de interesse</h1>
                    <p class="formulario-trabalhe-conosco__subtitulo">Dados profissionais</p>
                    <div class="formulario-trabalhe-conosco__campos">
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Analista de Sistemas
                            <input name="inputAreaInteresse" value="Analista de Sistemas" type="radio" id="analistaSistemas" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Design
                            <input name="inputAreaInteresse" value="Design" type="radio" id="design" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Desenvolvedor Back-End
                            <input name="inputAreaInteresse" value="Desenvolvedor Back-End" type="radio" id="desenvolvedorBackEnd" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Desenvolvedor Front-End
                            <input name="inputAreaInteresse" value="Desenvolvedor Front-End" type="radio" id="desenvolvedorFrontEnd" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__checkbox-radio-container">Administrador de Banco de Dados
                            <input name="inputAreaInteresse" value="Administrador de Banco de Dados" type="radio" id="administradorBanco" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="formulario-trabalhe-conosco__curriculo">
                            <p>Envie a nós seu currículo</p>
                            <div class="formulario-trabalhe-conosco__curriculo-container">
                                <input id="arquivo" name="inputArquivo" type="file">
                                <label for="arquivo">
                                    <img src="img/trabalhe-conosco/icone-trabalhe-conosco-arquivo.png" alt="Ícone arquivo">
                                    Selecione seu arquivo
                                </label>
                            </div>
                        </label>
                        <button class="formulario-trabalhe-conosco__buton-submit" type="submit">Enviar</button>  
                    </div>
                </div>      
                  
            </form>
        </div>
    </main>
    <div class="iframe-container">
        <iframe class="iframe-container__mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.28862947682!2d-46.7286281!3d-23.5209127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1605321889136!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>   
<?php include 'cabecalho_rodape/rodape.php'; ?>