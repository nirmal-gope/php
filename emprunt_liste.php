<?php
include "includes/init.inc.php";
if(!isAdmin()){
    ajouterMessage("danger", "Erreur 403 - Accès interdit");
    redirection("index.php");
}

$emprunts = selectAll("emprunt");
include "vues/header.html.php";
?>
<h1>Liste des emprunts</h1>
<table class="table table-border table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Abonné</th>
        <th>Livre</th>
        <th>Emprunté le</th>
        <th>Rendu le</th>
    </thead>
    <tbody>
        <?php foreach ($emprunts as $emprunt) : ?>
            <tr>
                <td>
                    <?= $emprunt["id"] ?>
                </td>
                <td>
                    <!-- Afficher le pseudo au lieu de l'id de l'abonné-->
                    <?php $abonne = selectById("abonne", $emprunt["abonne_id"]);
                    echo $abonne["pseudo"];
                    ?>
                </td>
                <td>
                    <!-- Afficher le titre/auteur au lieu de l'id de livre-->
                    <?php $livre = selectById("livre", $emprunt["livre_id"]);
                    echo $livre["titre"] . " - " . $livre["auteur"];
                    ?>
                </td>
                <td>
                    <?= $emprunt["date_emprunt"] ?>
                </td>
                <td>
                    <?= $emprunt["date_retour"] ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "vues/footer.html.php"; ?>