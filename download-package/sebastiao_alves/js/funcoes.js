function mudarBotao(){

    //Variaveis Locais
    let hamburguer = document.getElementById("hamburguer");

    //Executar
    if( hamburguer.getAttribute("src") == "imagens/fechar.svg"){
        hamburguer.setAttribute("src", "imagens/menu.svg");
    }
    else{
        hamburguer.setAttribute("src", "imagens/fechar.svg");
    }
    
}

function abrirMenu(){

    //Variaveis Locais
    let menu_livros = document.querySelector("#livrosdrop");

    //Executar
    menu_livros.scrollIntoView();
    setTimeout(clicar, 700);
}

function clicar(){
    //Variaveis Locais
    let menu_livros = document.querySelector("#livrosdrop");

    //Executar
    menu_livros.click();
}

function verMais(){
    //Variaveis Locais
    let ver_mais = document.querySelector("#ver_mais");
    let long_txt = document.querySelector("#longtxt");
    let short_txt = document.querySelector("#shortxt");

    //Executar
    ver_mais.classList = "d-none";
    long_txt.classList.replace("d-none", "d-block");
    short_txt.classList.replace("d-block", "d-none");

}
