<?php
include "includes/init.inc.php";
if (!isAdmin()) {
    $_SESSION["messages"]["danger"][] = "Accès interdit !";
    redirection("index.php");
}

if (!empty($_GET["id"])) {
    extract($_GET);
    $pdostatement = $pdo->prepare("SELECT * FROM livre WHERE id = :id");
    $pdostatement->bindValue(":id", $id);
    $resultat = $pdostatement->execute();
    if ($resultat && $pdostatement->rowCount() == 1) {
        $abonne = $pdostatement->fetch(PDO::FETCH_ASSOC);
        if ($_POST) {
            extract($_POST);
            if (!empty($pseudo)) {
                if (strlen($pseudo) >= 4 && strlen($pseudo) <= 30) {
                    $texteRequete = "UPDATE livre SET titre = :titre, auteur = :auteur";

                    $texteRequete .= " WHERE id = :id";

                    $pdostatement = $pdo->prepare($texteRequete);
                    $pdostatement->bindValue(":titre", $titre);
                    $pdostatement->bindValue(":auteur", $auteur);
                    $pdostatement->bindValue(":id", $id);

                    $resultat = $pdostatement->execute();
                    if ($resultat) {
                        $msgSucces = "Livre n°$id a bien été modifié";
                        $_SESSION["messages"]["success"][] = $msgSucces;
                        header("Location: abonne_liste.php");
                        exit;
                    } else {
                        $msgErreur = "Erreur BDD";
                        $_SESSION["messages"]["danger"][] = $msgErreur;
                    }
                } else {
                    $msgErreur = "Le pseudo doit comporter entre 4 et 30 caractères";
                    $_SESSION["messages"]["danger"][] = $msgErreur;
                }
            } else {
                $msgErreur = "Le pseudo ne peut pas être vide";
                $_SESSION["messages"]["danger"][] = $msgErreur;
            }
        }
    }
} else {
    echo "erreur 404 !";
    exit;
}

include "vues/header.html.php";

$titre = "Modifier livre n°$id";
include "vues/form_livre.html.php";

include "vues/footer.html.php";
