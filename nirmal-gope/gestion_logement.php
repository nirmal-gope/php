<?php
include "includes/init.inc.php";
include "vues/header.html.php";
$logements = selectAll("logement");
?>

<table class="table table-bordered table-responsive-lg text-center table-hover my-4">
    <thead class="table-primary">
        <th>Titre</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>CP</th>
        <th>Surface</th>
        <th>Prix</th>
        <th>Photo</th>
        <th>Type</th>
        <th>Description</th>
    </thead>

    <tbody>
        <?php foreach ($logements as $logement) :  ?>
            <tr>
                <td><?= $logement["titre"] ?></td>
                <td><?= $logement["adresse"] ?></td>
                <td><?= $logement["ville"] ?></td>
                <td><?= $logement["cp"] ?></td>
                <td><?= $logement["surface"] . "	&#13217" ?></td>
                <td><?= $logement["prix"] . " €" ?></td>
                <td><a href="uploads/<?= $logement["photo"] ?>"><img class="miniature" src="uploads/<?= $logement["photo"] ?>" alt="<?= $logement["titre"] ?>"></a>
                </td>
                <td><?= $logement["type"] ?></td>
                <td><?= substr($logement["description"], 0, 50) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "vues/footer.html.php";
