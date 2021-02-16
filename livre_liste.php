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
    <thead class="thead-dark">
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Couverture</th>
    </thead>

    <tbody>
        <?php foreach ($livres as $livre) :  ?>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "vues/footer.html.php"; ?>