<?php
include "includes/init.inc.php";
if( !isAbonne() ){
    $_SESSION["messages"]["danger"][] = "Accès interdit !";
    redirection("index.php");
}


if( !empty($_GET["id"]) ){
    extract($_GET);
    $pdostatement = $pdo->prepare("SELECT * FROM voitures WHERE id = :id");
    $pdostatement->bindValue(":id", $id);
    $resultat = $pdostatement->execute();
    if( $resultat && $pdostatement->rowCount() == 1 ){
        $voiture = $pdostatement->fetch(PDO::FETCH_ASSOC);
        if( $_POST ){
            extract($_POST);
            if( !empty($marque && $kilometrage && $tarif) ){
                if( strlen($marque) >= 3 && strlen($marque) <= 30 ){
                    $texteRequete = "UPDATE voitures SET marque = :marque";
                    if(strlen($kilometrage && $tarif )>= 1){
                        $texteRequete = "UPDATE voitures SET kilometrage = :kilometrage, tarif = :tarif, photo = :photo, fiche = :fiche";
                    }

                    $texteRequete .= " WHERE id = :id";
                    $pdostatement = $pdo->prepare($texteRequete);
                    $pdostatement->bindValue(":marque", $marque);
                    $pdostatement->bindValue(":kilometrage", $kilometrage);
                    $pdostatement->bindValue(":tarif", $tarif);
                    $pdostatement->bindValue(":photo", $photo);
                    $pdostatement->bindValue(":fiche", $fiche);
                    $pdostatement->bindValue(":id", $id);
                    $resultat = $pdostatement->execute();
                    if($resultat ){
                        $msgSucces = "L'annonce n°$id a bien été modifié";
                        $_SESSION["messages"]["success"][] = $msgSucces;
                        header("Location: gestion_voitures.php");
                        exit;
                    } else {
                        $msgErreur = "Erreur BDD";
                        $_SESSION["messages"]["danger"][] = $msgErreur;
                    }
                } else {
                    $msgErreur = "La marque doit comporter entre 3 et 30 caractères";
                    $_SESSION["messages"]["danger"][] = $msgErreur;
                }
            } else {
                $msgErreur = "La marque ne peut pas être vide";
                $_SESSION["messages"]["danger"][] = $msgErreur;
            }
        }
    }

} else {
    echo "erreur 404 !";
    exit;
}

include "vues/header.html.php";
$titre = "Modifier l'annonce n°$id";
include "vues/form_voiture.html.php";
include "vues/footer.html.php";
