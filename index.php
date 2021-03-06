<?php

include "includes/init.inc.php";
include "vues/header.html.php";
$pdostatement = $pdo->query("SELECT * FROM livre");
if ($pdostatement && $pdostatement->rowCount() > 0) {
    $livres = $pdostatement->fetchAll(PDO::FETCH_ASSOC);
}

?>

<h1 class="text-center alert bg-warning">Bienvenue à la Biblio</h1>

<div class="card-columns">
    <?php foreach ($livres as $livre) :  ?>
        <div class="card my-3">
            <h4 class="card-header"><?= $livre["titre"] ?></h4>
            <div class="row">
                <div class="col-3 d-flex align-items-center">
                    <img class="p-1 miniature" src="uploads/<?= $livre["couverture"] ?>" alt="couverture">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <p class="card-text">De : <?= $livre["auteur"] ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="emprunter_livre.php?id=<?= $livre["id"] ?>" class="card-link">
                    <i class="fa fa-book"></i> Emprunter
                </a>
                <!-- Si le livre est dans la liste des livres non rendus, ne pas afficher le lien pour emprunter-->
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php
include "vues/footer.html.php";
