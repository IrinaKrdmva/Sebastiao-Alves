<?php

function getContactos($info){
    $resultado = selectSQLUnico("SELECT $info FROM contactos WHERE id=1");
    return $resultado["$info"];
}
?>