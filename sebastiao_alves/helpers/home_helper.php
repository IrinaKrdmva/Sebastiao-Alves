<?php

function getImagemHome(){
    $resultado = selectSQLUnico("SELECT imagem_bv FROM home WHERE id=1");
    return $resultado["imagem_bv"];
}

function getTextoUltimosLivrosHome(){
    $resultado = selectSQLUnico("SELECT texto_ultimos_livros FROM home WHERE id=1");
    return $resultado["texto_ultimos_livros"];
}

?>