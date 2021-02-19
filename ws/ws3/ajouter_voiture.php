<?php
include 'includes/init.inc.php';

if ($_POST) {
    extract($_POST);

    if (!empty($marque) && !empty($kilometrage) && !empty($tarif)) {
        if (strlen($marque) > 15) {
            $_SESSION["messages"]["danger"][] = "Le marque ne doit pas dépasser 20 caractères";
        }
        if (strlen($kilometrage) < 1 || strlen($kilometrage) > 6) {
            $_SESSION["messages"]["danger"][] = "Kilometrage doit comporter entre 1 et 6 caractères";
        }
        if (strlen($tarif) < 1 || strlen($tarif) > 3) {
            $_SESSION["messages"]["danger"][] = "Tariff doit comporter entre 1 et 6 caractères";
        }
        if (empty($_SESSION["messages"]["danger"])) {
            if (!empty($_FILES["photo"]["name"])) {
                $fileName = uniqid() . $_FILES["photo"]["name"];
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
            $pdostatement = $pdo->prepare("INSERT INTO voitures (marque, kilometrage, tarif, photo, fiche) VALUES (:marque, :kilometrage, :tarif, :photo, :fiche)");
            $pdostatement->bindValue(":marque", $marque);
            $pdostatement->bindValue(":kilometrage", $kilometrage);
            $pdostatement->bindValue(":tarif", $tarif);
            $pdostatement->bindValue(":photo", $photo ?? null);
            $pdostatement->bindValue(":fiche", $fiche ?? null);


            $resultat = $pdostatement->execute();
            if ($resultat) {
                $_SESSION["message"]["success"][] = "Le nouveau livre a bien été ajouté";
                redirection("gestion_voitures.php");
            } else {
                $_SESSION["message"]["success"][] = "Erreur lors de l'insertion en bdd";
            }
        }
    } else {
        $_SESSION['messages']['danger'][] = 'Veuillez renseigner les champs obligatoires';
    }
}

include 'vues/header.html.php';
include 'vues/form_voiture.html.php';
include 'vues/footer.html.php';