<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce Voiture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0498bcf658.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar alert navbar-light navbar-expand-lg m-0" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="index.php">Consession Voitures</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="ajouter_voiture.php">Publier une annonce<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_voitures.php">Gestion des voitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestion_membres.php">Gestion des membres</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <?php if ($abonneConnecte = isConnected()) : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">
                                <?= $abonneConnecte["pseudo"] ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deconnexion.php">
                                Déconnexion
                            </a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>

                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <div class="mb-3">
            <img src="uploads/bg.jpg" alt="banner" width="100%">
        </div>
        <div class="container">
            <?php
            if (isset($_SESSION["messages"])) {
                foreach ($_SESSION["messages"] as $type => $messages) {
                    foreach ($messages as $msg) {
                        echo "<div class='alert alert-$type'>$msg</div>";
                    }
                }
            }
            unset($_SESSION["messages"]);
            ?>