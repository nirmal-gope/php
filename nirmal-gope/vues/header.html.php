<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-light navbar-expand-xl " style="background-color: #5bc0de;">
            <a class="navbar-brand" href="index.php">Immobilier</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="gestion_logement.php">Gestion des Logement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajouter_logement.php">Publier une annonce</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- slider begins-->
        <div id="banner" class="carousel slide mb-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="uploads/bg.png" class="d-block w-100" alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="uploads/h1.jpg" class="d-block w-100" alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="uploads/h2.jpg" class="d-block w-100" alt="banner">
                </div>
                <div class="carousel-item">
                    <img src="uploads/h3.jpg" class="d-block w-100" alt="banner">
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <!-- slider ends-->
        <div class="container">

            <?php
            if (isset($_SESSION["messages"])) {
                foreach ($_SESSION["messages"] as $type => $messages) {
                    foreach ($messages as $msg) {
                        echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>$msg
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }
                }
            }
            unset($_SESSION["messages"]);
            ?>