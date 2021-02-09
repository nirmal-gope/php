<?php
/*
Pour se connecter à une base de données, on utilise la classe PDO
*/
include "vues/header.html.php";
include "includes/init.inc.php";

if ($_POST) {
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $pseudo = addslashes($pseudo); //ajoute un backslash avant les '
    $pseudo = htmlentities($pseudo); // transforme les charactères spéciaux en entités HTML
    //ex: &lt;script&gt; à la place de <script>

    //SELECT * FROM abonne WHERE pseudo = '$pseudo' AND mdp = '$mdp'
    $pdostatement = $pdo->query("SELECT * FROM abonne WHERE pseudo = '" . $pseudo . "' AND mdp = '" . $mdp . "' ");
    /*
    La méthode peut renvoyer false ou un object pdstatement : s'il y a une erreur dans la requêt, query renvoie false un objet ne peut jamais étre considére comme false, donc mettre if(pdstatement) renvient à dire que si la condition est vrai, c'est que la méthode query a renvoyé un objet pdstatement
    Donc je peux appeler la méthode rowCount() qui renvoie le nombre de lignes de la requête exécutée dans query()
*/
    if ($pdostatement && $pdostatement->rowCount() >= 1) {
        echo "vous étes connecté !";
    } else {
        echo "Erreur d'identifiant !";
        /*Redirect HTTP : header("Location : url.php); */
        header("Location: formulaire.php");
        /*la fonctiuon exit() est identique à la fonction die(), elle stoppe l'exécution du PHP*/
        exit;
    }
}
include "vues/footer.html.php";
