<?php
include "includes/init.inc.php";
if (!isAdmin()) {
    $_SESSION["messages"]["danger"][] = "Accès interdit !";
    redirection("index.php");
}

include "vues/header.html.php";

$pdostatement = $pdo->query("SELECT * FROM livre");
if ($pdostatement && $pdostatement->rowCount() > 0) {
    $livres = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

}
?>

<table class="table table-bordered text-center">
    <thead class=" thead-dark">
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Couverture</th>
        <th>Actions</th>
    </thead>

    <tbody>
        <?php foreach ($livres as $livre) :  ?>
            <tr>
                <td><?= $livre["id"] ?></td>
                <td><?= $livre["titre"] ?></td>
                <td><?= $livre["auteur"] ?></td>
                <td><img class="miniature" src="uploads/<?= $livre["couverture"] ?>" alt="image">
                </td>
                <td>
                    <a class="btn btn-primary" href=" livre_modifier.php?id=<?= $livre["id"] ?>">Modifier</a>
                    <a class="btn btn-danger" href="livre_supprimer.php?id=<?= $livre["id"] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "vues/footer.html.php"; ?>