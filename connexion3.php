<?php

/* Pour se connecter à une base de données, on utilise la classe PDO */
include "includes/init.inc.php";
include "vues/header.html.php";

if( $_POST ){
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $pseudo = addslashes($pseudo);      // ajoute un backslash avant les '
    $pseudo = htmlentities($pseudo);  // transforme les caractères spéciaux en entités HTML 
                                            //ex: &lt;script&gt;  à la place de  <script>

    // SELECT * FROM abonne WHERE pseudo = '$pseudo' AND mdp = '$mdp'
    $pdostatement = $pdo->query("SELECT * FROM abonne WHERE pseudo = '" . $pseudo . "' AND mdp = '" . $mdp . "'");

    /* La méthode peut renvoyer false ou un objet PDOStatement : s'il y a une erreur dans la requête, query renvoie false
       Un objet ne peut jamais être considéré comme FALSE, donc mettre if($pdostatement) revient à dire que si la condition
       est vrai, c'est que la méthode query a renvoyé un objet PDOStatement
       Donc je peux appeler la méthode rowCount() qui renvoie le nombre de lignes de la requête exécutée dans query()
    */
    if( $pdostatement && $pdostatement->rowCount() >= 1 ){
        echo "Vous êtes connecté !";
    } else {
        echo "Erreur d'identifiant !";
        /* Redirection HTTP : header("Location: url.php"); */
        header("Location: formulaire.php");
        /* La fonction exit() est identique à la fonction die(), elle stoppe l'exécution du PHP */
        exit;
    }
}
include "vues/footer.html.php";