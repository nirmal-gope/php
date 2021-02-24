<?php
include "includes/init.inc.php";
include "vues/header.html.php";
$logements = selectAll("logement");
?>


<div class="card-columns">
    <?php foreach ($logements as $logement) :  ?>
        <div class="card">
            <img class="cardImg" src="uploads/<?= $logement["photo"] ?>" alt="<?= $logement["titre"] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $logement["titre"] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $logement["adresse"] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $logement["ville"]  ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $logement["cp"]  ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $logement["prix"]  . " €" ?></h6>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php include "vues/footer.html.php"; ?>