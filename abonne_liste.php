<?php
include "includes/init.inc.php";

include "vues/header.html.php";


$pdostatement = $pdo->query("SELECT * FROM abonne");
if( $pdostatement && $pdostatement->rowCount() > 0 ){
    // La méthode fetchAll() pour récupérer toutes les lignes de la requête
    // PDO::FETCH_ASSOC signifie qu'on récupère les lignes sous forme d'array
    $abonnes = $pdostatement->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; var_dump($abonnes); echo "</pre>";
}

?> 

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Pseudo</th>
        <th>Mot de passe</th>
        <th>Actions</th>
    </thead>

    <tbody>
        <?php foreach($abonnes as $abonne):  ?>
            <tr>
                <td><?= $abonne["id"] ?></td>
                <td><?= $abonne["pseudo"] ?></td>
                <td><?= $abonne["mdp"] ?></td>
                <td>
                    <a href="abonne_modifier.php?id=<?= $abonne["id"] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include "vues/footer.html.php"; ?>