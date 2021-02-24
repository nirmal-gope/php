<?php
include 'includes/init.inc.php';

if ($_POST) {
    extract($_POST);

    if (!empty($titre && $adresse && $ville && $cp && $surface && $prix && $type)) {
        if (strlen($titre) > 30) {
            $_SESSION["messages"]["danger"][] = "Le titre ne doit pas dépasser 30 caractères";
            if (strlen($adresse) >= 5 && strlen($adresse) <= 80) {
                $_SESSION["messages"]["danger"][] = "L'adresse doit comporter entre 5 et 50 caractères";
                if (strlen($ville) >= 5 && strlen($ville) <= 25) {
                    $_SESSION["messages"]["danger"][] = "Ville doit comporter entre 5 et 15 caractères";
                }
            }
        }

        if (!is_numeric($cp)) {
            $_SESSION["messages"]["danger"][] = "Entrez un numéro valide en CP";
        }
        if (strlen($cp) != 5) {
            $_SESSION["messages"]["danger"][] = "CP doit comporter 5 caractères";
        }

        if (!is_numeric($surface)) {
            $_SESSION["messages"]["danger"][] = "Entrez un numéro valide en Surface";
        }
        if ($surface >= 2 && $surface <= 5) {
            $_SESSION["messages"]["danger"][] = "Surface doit comporter entre 2 et 5 caractères";
        }
        if (!is_numeric($prix)) {
            $_SESSION["messages"]["danger"][] = "Entrez un numéro valide en Prix";
        }
        if (empty($_SESSION["messages"]["danger"])) {
            if (!empty($_FILES["photo"]["name"])) {
                $getName = $_FILES['photo']['name'];
                $explodeName = explode(".", $getName);
                $fileName = "logement_" . time() . "." . end($explodeName);
                $tempFile = $_FILES["photo"]["tmp_name"];
                $uploadFolder = __DIR__ . "/uploads";
                $fileMove = copy($tempFile, $uploadFolder . "/" . $fileName);
                if ($fileMove) {
                    $_SESSION["messages"]["success"][] = "L'image a bien été uploadée";
                    $photo = $fileName;
                } else {
                    $_SESSION["messages"]["danger"][] = "Erreur lors de l'enregistrement de l'image";
                }
            }
            if (empty($type)) {
                $_SESSION["messages"]["danger"][] = "Choisissez au moins un type";
            }

            $pdostatement = $pdo->prepare("INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)");

            $pdostatement->bindValue(":titre", $titre);
            $pdostatement->bindValue(":adresse", $adresse);
            $pdostatement->bindValue(":ville", $ville);
            $pdostatement->bindValue(":cp", $cp);
            $pdostatement->bindValue(":surface", $surface);
            $pdostatement->bindValue(":prix", $prix);
            $pdostatement->bindValue(":photo", $photo ?? null);
            $pdostatement->bindValue(":type", $type);
            $pdostatement->bindValue(":description", $description ?? null);

            $resultat = $pdostatement->execute();
            if ($resultat) {
                $_SESSION["message"]["success"][] = "Le nouveau location a bien été ajouté";
                redirection("gestion_logement.php");
            } else {
                $_SESSION["message"]["success"][] = "Erreur lors de l'insertion en bdd";
            }
        }
    } else {
        $_SESSION['messages']['danger'][] = 'Veuillez renseigner les champs obligatoires';
    }
}

include 'vues/header.html.php';
include 'vues/form_logement.html.php';
include 'vues/footer.html.php';
