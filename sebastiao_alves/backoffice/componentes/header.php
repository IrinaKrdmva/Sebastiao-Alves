<?php

if(!verificarLogado()){
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- CKEDITOR5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="css/style_backoffice.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
                <div class="container-fluid d-flex justify-content-center mx-5">
                    <a class="navbar-brand" href="#">SA <span class="text-warning">Backoffice</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBackoffice" aria-controls="navbarBackoffice" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarBackoffice">
                        <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="inicio.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Carousel
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="carousel_criar.php">Criar</a></li>
                                <li><a class="dropdown-item" href="carousel.php">Editar | Apagar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Livros
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="livro_criar.php">Criar</a></li>
                                <li><a class="dropdown-item" href="livros.php">Editar | Apagar</a></li>
                            </ul>
                        </li>             
                        <li class="nav-item">
                            <a class="nav-link" href="destaques.php">Destaques</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Imprensa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="imprensa_criar.php">Criar</a></li>
                                <li><a class="dropdown-item" href="imprensa.php">Editar | Apagar</a></li>
                            </ul>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="contactos.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="logout.php">Logout</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

