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
    
    //Script para ativar e desativar dark-mode

    // const html = document.querySelector('html');
    // const checkbox = document.querySelector('.input-checkbox-dark');
    
    // checkbox.addEventListener('change', () => {
    //     html.classList.toggle('dark-mode');
    // });


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


    $('.portifolio-slider').slick({
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

        if(distTop >= 100){
            cabecalho.classList.add('scroll');
            cabecalhoMenu.classList.add('scroll');
        } else {
            cabecalho.classList.remove('scroll');
            cabecalhoMenu.classList.remove('scroll');
        }

    });

    

});
