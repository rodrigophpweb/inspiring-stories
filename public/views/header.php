<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); // Redireciona para o login se não estiver logado
        exit();
    }
$welcome = "Bem-vindo, " . $_SESSION['username'] . "!";
?>
<!DOCTYPE html>
<html lang="pt_br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac na Minha História</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://icons.getbootstrap.com/assets/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column"></body>
<header class="bg-body-tertiary">
       <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png" alt="Bootstrap" width="50">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="add.php">Cadastrar</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="search.php">Filtros</a>
                                </li>
                                
                                
                                <!-- <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li> -->
                            </ul>
                        
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex d-flex flex-column align-items-end ">
                        <div style="font-size: 1rem; text-align:right"><?=$welcome?></div>
                        <a href="logout.php">Logout</a>
                    </div>
                </nav>
            </div>  
       </div>   
</header>