//Barra percentual da leitura de um conteúdo na página

    //Barra percentual
    let bar = document.createElement("div");

    //Ccontainer da leitura
    const pageBody = document.querySelector("body");

    //Fazendo estilos do elementos
    bar.style.height = "2px";
    bar.style.width = "500px";
    bar.style.backgroundColor = "#03989e";
    bar.style.position = "fixed";
    bar.style.top = "10vh";
    bar.style.left = "0";
    bar.style.zIndex = "9999";
    bar.style.transition = "0.2s";

    //Inserindo o elemento na página
    document.body.append(bar);

    function updateBar() {
        //Tamanho do container que contém o texto, nesse caso o body
        const textHeight = pageBody.offsetHeight;

        //Posição atual da página
        const pagePositionY = window.pageYOffset;

        //Regra de 3:        
        const updateBar = pagePositionY * 100 / textHeight;

        bar.style.width = updateBar + "%";
    }

    //Atualizar a barra de percentual
    document.addEventListener("scroll", updateBar);

// --------------------------------------------------------   

//Barra percentual de leitura da página
    
let bar = document.createElement("div");

bar.style.height = "2px";
bar.style.width = "0px";
bar.style.backgroundColor = "#03989e";
bar.style.position = "fixed";
bar.style.top = "10vh";
bar.style.left = "0";
bar.style.zIndex = "9999";
bar.style.transition = "0.2s";

//Inserindo o elemento na página
document.body.append(bar);

window.addEventListener("scroll", () => {
    //Distância do topo do elemtento até a parte superior visível
    let distScroll = document.documentElement.scrollTop;

    //Altura completa do elemento incluindo a parte que transborda, padding e  etc
    // - (menos) a parte visível do elemento (inclui apenas padding)
    let pageBody = document.documentElement.scrollHeight -
    document.documentElement.clientHeight;

    let percentual = (distScroll * 100) / pageBody;
    
    bar.style.width = `${percentual}%`;

});