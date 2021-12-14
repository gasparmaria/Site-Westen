$(document).ready(function(){
    class MenuHamburguer {
        constructor(cabecalho, menuHamburguer, cabecalhoMenu, cabecalhoMenuItem) {
            this.cabecalho = document.querySelector(cabecalho);
            this.menuHamburguer = document.querySelector(menuHamburguer); 
            this.cabecalhoMenu = document.querySelector(cabecalhoMenu);
            this.cabecalhoMenuItem = document.querySelectorAll(cabecalhoMenuItem);

            this.menuAberto = "menu-hamburguer--aberto";
            this.colorCabecalho = "colorMenuScroll";
            this.overflowVisible = true;
    
            this.ativarMenu = this.ativarMenu.bind(this);
        }
    
        animacaoLinkMenu() {
            this.cabecalhoMenuItem.forEach((link, index) => {
                link.style.animation 
                    ? (link.style.animation = "") 
                    : (link.style.animation = `animationLinksMenu 0.5s ease forwards
                    ${index / 7 + 0.2}s`);
            });
        }
    
        ativarMenu(){
            this.cabecalho.classList.toggle(this.colorCabecalho);
            this.menuHamburguer.classList.toggle(this.menuAberto);
            this.cabecalhoMenu.classList.toggle(this.menuAberto);
            
            this.animacaoLinkMenu();

            document.body.style.overflowY = this.overflowVisible ? "hidden" : "visible";
            this.overflowVisible = !this.overflowVisible;
    
        }
    
        addClickEvent() {
            this.menuHamburguer.addEventListener("click", this.ativarMenu);
        }
    
        init() {
            if(this.menuHamburguer) {
                this.addClickEvent();
            }
            return this;
        }
    }
    
    //Instânciando o objeto menuHamburguer
    const menuHamburguer = new MenuHamburguer(
        ".cabecalho",
        ".menu-hamburguer",
        ".cabecalho-menu",
        ".cabecalho-menu__item",
    );
    
    //Chamando método herdado pela classe MenuHamburguer
    menuHamburguer.init();

    //Script para dark-mode continuar ativo
    const darkModeStorage = localStorage.getItem('theme-page');
    const html = document.querySelector('html');
    const inputDarkMode = document.querySelector('.input-checkbox-dark');

    if(darkModeStorage) {
        html.setAttribute('class', 'dark-mode');
        inputDarkMode.setAttribute('checked', '');
    }

    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked) {
            html.setAttribute('class', 'dark-mode');
            localStorage.setItem('theme-page', 'dark-mode');
        } else {
            html.removeAttribute('class')
            localStorage.removeItem('theme-page');
        }
    });

    $('.portfolio-slider').slick({
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoPlay: true,
        autoplaySpeed: 2000,  
        responsive: [
            {
            breakpoint: 1100,
            settings: {
                arrows: false,
                centerMode: false,
                slidesToShow: 2,
            }
            },
            {
            breakpoint: 545,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '50px',
                slidesToShow: 1
            }
            }
        ]
    });

    //Alterar cor do menu com rolagem do scroll;
    const cabecalho = document.querySelector('.cabecalho');
    const cabecalhoMenu = document.querySelector('.cabelho-menu');
    document.addEventListener("scroll", () => {
        let distTop = window.pageYOffset;

        if(distTop >= 1){
            cabecalho.classList.add('scroll');
            cabecalhoMenu.classList.add('scroll');
        } else {
            cabecalho.classList.remove('scroll');
            cabecalhoMenu.classList.remove('scroll');
        }

    });

    let inputFileText = document.querySelector('#arquivo')
    inputFileText.addEventListener('change', function(){
        document.querySelector('.labelFileText').innerHTML += this.files[0].name;
    });

    $('.formulario-administrador').validate({
        rules: {
            inputTitulo: {
                required: true
            },
            inputDescricao: {
                required: true,
                maxlength: 300
            },
            selectCliente: {
                required: true
            },
            selectServico: {
                required: true
            },
            inputNome: {
                required: true,
            },
            inputEmail: {
                required: true,
                email: true
            },
            inputSenha: {
                required: true,
                rangelength: [8,8]
            },
            selectSkill: {
                required: true
            }
        },
        messages: {
            inputTitulo: {
                required: 'Preenchimento obrigatório.'
            },
            inputDescricao: {
                required: 'Faça uma breve descrição no campo acima',
                maxlength: 'Faça uma breve com no máximo 300 caacteres'
            },
            selectCliente: {
                required: 'Informe um cliente.'
            },
            selectServico: {
                required: 'Informe um serviço.'
            },
            inputNome: {
                required: 'Preenchimento obrigatório.'
            },
            inputEmail: {
                required: 'Preencha o campo e-mail.',
                email: 'Preencha o campo com um e-mail válido'
            },
            inputSenha: {
                required: 'Preencha o campo senha',
                rangelength: 'A senha deve conter 8 caracteres'
            },
            selectSkill: {
                required: 'Preencha o campo skill'
            }
        }
    });    
});


    
