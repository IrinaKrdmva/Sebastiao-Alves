<?php

function getImprensa($id){
    $resultado = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");
    return $resultado;
}

function getTodaImprensa(){
    $resultado = selectSQL("SELECT * FROM imprensa");
    return $resultado;
}

function getTituloImprensa($id){
    $resultado = selectSQLUnico("SELECT titulo FROM imprensa WHERE id=$id");
    return $resultado["titulo"];
}

function getDataImprensa($id){
    $resultado = selectSQLUnico("SELECT data_publicacao FROM imprensa WHERE id=$id");
    return $resultado["data_publicacao"];
}

function getImagemImprensa($id){
    $resultado = selectSQLUnico("SELECT imagem FROM imprensa WHERE id=$id");
    return $resultado["imagem"];
}

function getTextoImprensa($id){
    $resultado = selectSQLUnico("SELECT texto FROM imprensa WHERE id=$id");
    return $resultado["texto"];
}

?>