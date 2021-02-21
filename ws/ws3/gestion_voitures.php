<?php
include "includes/init.inc.php";
include "vues/header.html.php";
$Voitures = selectAll("voitures");
?>

<table class="table table-bordered table-responsive-md text-center table-hover my-4">
    <thead class="table-primary">
        <th>ID</th>
        <th>Marque</th>
        <th>Kilometrage</th>
        <th>Tarif</th>
        <th>Photo</th>
        <th>Fiche</th>
        <th>Actions</th>
    </thead>

    <tbody>
        <?php foreach ($Voitures as $voiture) :  ?>
            <tr>
                <td><?= $voiture["id"] ?></td>
                <td><?= $voiture["marque"] ?></td>
                <td><?= $voiture["kilometrage"] ?></td>
                <td><?= $voiture["tarif"] ?></td>
                <td><a href="uploads/<?= $voiture["photo"] ?>"><img class="miniature" src="uploads/<?= $voiture["photo"] ?>" alt="image"></a>
                </td>
                <td><a href="uploads/<?= $voiture["fiche"] ?>" class="btn btn-secondary">Télécharger la détailée</a>
                </td>
                <td>
                    <a class="btn btn-primary m-1" href="annonce_modifier.php?id=<?= $voiture["id"] ?>">Modifier</a>
                    <a class="btn btn-danger m-1" href="annonce_supprimer.php?id=<?= $voiture["id"] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "vues/footer.html.php";
