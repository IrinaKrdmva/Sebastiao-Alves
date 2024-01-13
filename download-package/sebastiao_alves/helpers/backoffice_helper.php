<?php

function fazerLogin($login, $password){
    $usuario_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login' AND password='$password'");
    if(!empty($usuario_encontrado)){
        session_start();
        $_SESSION["user"] = $usuario_encontrado;

        date_default_timezone_set("Europe/Lisbon");
        $data_atual = date("H:i:s - d/m/Y");
        $id = $usuario_encontrado["id"];
        iduSQL("UPDATE backoffice SET data_ultimo_acesso='$data_atual' WHERE  id=$id");

        return true;
    }
    else{
        return false;
    }
}

function verificarLogado(){
    session_start();
    if(!empty($_SESSION["user"])){
        return true;
    }
    else{
        return false;
    }
}

?>