<?php

include 'includes/init.inc.php';
if (!isAdmin()) {
    $_SESSION['messages']['danger'][] = 'Accès interdit !';
    redirection('index.php');
}

if ($_POST) {
    extract($_POST);
    if (isset($pseudo) && isset($mdp)) {
        if (strlen($pseudo) >= 4 && strlen($pseudo) <= 30) {
            if (strlen($mdp) >= 4 && strlen($mdp) <= 10) {
                $pseudo = htmlentities(addslashes($pseudo));
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                $pdostatement = $pdo->prepare('INSERT INTO membre (pseudo, mdp, nom, prenom, email, telephone, statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :telephone, :statut)');
                $pdostatement->bindValue(':pseudo', $pseudo);
                $pdostatement->bindValue(':mdp', $mdp);
                $pdostatement->bindValue(':nom', $nom);
                $pdostatement->bindValue(':prenom', $prenom);
                $pdostatement->bindValue(':email', $email);
                $pdostatement->bindValue(':telephone', $telephone);
                $pdostatement->bindValue(':statut', $statut);
                try {
                    $resultat = $pdostatement->execute();
                } catch (\Throwable $th) {
                    $_SESSION['messages']['danger'][] = 'Erreur BDD';
                }

                if (!empty($resultat)) {
                    $_SESSION['messages']['success'][] = 'Le nouvel abonné a bien été ajouté dans la base de données';
                    header('Location: gestion_membres.php');
                    exit;
                } else {
                    $_SESSION['messages']['danger'][] = "Erreur lors de l'insertion en BDD";
                }
            } else {
                $_SESSION['messages']['danger'][] = 'Le mot de passe doit comporter entre 4 et 10 caractères';
            }
        } else {
            $_SESSION['messages']['danger'][] = 'Le pseudo doit comporter entre 4 et 30 caractères';
        }
    } else {
        $_SESSION['messages']['danger'][] = 'Formulaire invalide';
    }
}

include 'vues/header.html.php';
include 'vues/form_membre.html.php';
include 'vues/footer.html.php';
