<?php

require_once("requisitos.php");

$form = isset($_POST["login"]) && isset($_POST["password"]);

if($form){
    $login = $_POST["login"];
    $password = $_POST["password"];

    if(fazerLogin($login, $password)){
        header("Location: inicio.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="css/style_backoffice.css">

</head>
<body>
    
    <main class="container my-5 p-5 rounded-4">
        <div class="row text-center">
            <div class="col-12">

               <h3 class="titulo">Login</h3>

               <?php if($form): ?>

                <br>

                <h6 class="text-warning">LOGIN INCORRETO!</h6>

               <?php endif; ?>

               <br>

               <form action="" autocomplete="off" method="POST">
                    <input class="text-center" type="text" name="login" placeholder="LOGIN" autofocus required style="width:188px;">
                    <br><br>
                    <input class="text-center" type="password" name="password" placeholder="PASSWORD" required style="width:188px;">
                    <br><br>
                    <input type="submit" value="ENTRAR" class="botao_criar">
               </form>
            </div>
        </div>
    </main>


</body>
</html>