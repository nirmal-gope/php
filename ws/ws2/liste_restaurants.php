<!-- Appel des fichiers externes -->
<?php
include 'vues/header.html.php'; // Appel du l'entete du site
include 'includes/init.inc.php'; // Appel du fichier init qui contient la connexion de la base de données
// traitement de l'affichage de la liste des restaurants
/**
 * partie de traitement pour récuperer chaque restaurant qui pâsse en paramètre
 * $_GET['id_resto']-> recupère l'id de restaurant qui passe en url.
 */
//déclaration de la variable $msg_r  qui va contenir les détails de resto récupéré
$msg_r = '';

if (isset($_GET['id_resto'])) {
    //si il ya un paramètre qui passe dans l'URL, on va chercher le restaurant qui a comme id =id_resto
    $resto = $_GET['id_resto'];
    //Assainissement des données- protection contre les injections css et js
    $resto = htmlentities($resto, ENT_QUOTES);
    //requete
    $req = $pdo->prepare('SELECT * FROM restaurant WHERE id_restaurant= :id_restaurant');
    $req->bindParam(':id_restaurant', $resto);
    //exécuter la requete
    $req->execute();
    //on va fetcher le resultat,on transforme l'objet PDOStatement en un tableau associatif
    $res = $req->fetch(PDO::FETCH_ASSOC);
    //tester si le resultat est n'est pas vide
    if ($res) {
        //si le resultat n'est pas vide, je vais récupeerer les données
        $msg_r .= '<div class="card">';
        $msg_r .= '<div class="card-header alert-info text-center">' . $res['nom'] . ' </div>';
        $msg_r .= '<div class="card-body">';
        $msg_r .= '<ul class="list-group list-group-flush">';
        $msg_r .= '<li class="list-group-item">Type : ' . $res['type'] . '</li>';
        $msg_r .= '<li class="list-group-item">Adresse : ' . $res['adresse'] . '</li>';
        $msg_r .= '<li class="list-group-item">Téléphone : ' . $res['telephone'] . '</li>';
        $msg_r .= '<li class="list-group-item">Note : ' . $res['note'] . '</li>';
        $msg_r .= '<li class="list-group-item">Avis : ' . $res['avis'] . '</li>';
        $msg_r .= '</ul';
        $msg_r .= '</div>';
        $msg_r .= '</div>';
    }
}
?>
<h2 class="p-3 mt-3 alert bg-info text-white">Liste des restaurants</h2>

<?php
//1-on fait la requete sql
$req = $pdo->query('SELECT * from restaurant');
//2-fetcher les resultats
if ($req && $req->rowCount() > 0) {
    $restaurants = $req->fetchAll(PDO::FETCH_ASSOC);
}
//3- on va lire élement par element
// print_r($restaurants);
?>
<div class="row">
    <div class="col-md-8">
        <table class="table table-striped table-hover table-light">
            <thead class="thead-dark">
                <th>Nom</th>
                <th>Télèphone</th>
                <th>Autres infos</th>
            </thead>

            <tbody>
                <?php foreach ($restaurants as $restaurant) :  ?>
                    <tr>
                        <td><?= $restaurant['nom']; ?></td>
                        <td><?= $restaurant['telephone']; ?></td>
                        <td><a class="btn btn-info" href="?id_resto=<?= $restaurant['id_restaurant']; ?>">Plus de détails</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <?php
        //appel de la variable qui contient les détails de restaurant
        echo $msg_r;
        ?>
        <!-- ici on va mettre la card qui va contenir les details de chaque resto -->

    </div>
</div>
<button type="button" class="btn btn-outline-success col mt-5"><a href="ajouter_restaurant.php">Ajouter un nouveau restaurant</a></button>

<?php
include 'vues/footer.html.php'; // Appel du bas du site
?>