<?php
include "vues/header.html.php";
include "includes/functions.inc.php";

//exo: récupérer la liste des abonnés dans la BDD
try {
    $pdo = new PDO("mysql:host=localhost;dbname=biblio", "root", "");
} catch (Exception $ex) {
    die($ex->getMessage());
}
$pdostatement = $pdo->query("SELECT * FROM abonne");
if ($pdostatement && $pdostatement->rowCount() > 0) {
    //La méthod fetchAll() pour récupérer toutees les lignes de  la requête
    //PDO: FETCH_ASSOC signifie qu'on récupére les lignes sous forme d'array
    $abonnes = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    echo var_dump($abonnes);
    echo "</pre>";
}
?>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Pseudo</th>
        <th>Mot de passe</th>
    </thead>
    <tbody>
        <?php foreach ($abonnes as $abonn) :  ?>
            <tr>
                <td>
                    <?php echo $abonn["id"]  ?>
                </td>
                <td>
                    <?= $abonn["pseudo"]  ?>
                </td>
                <td><?= $abonn["mdp"]  ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>