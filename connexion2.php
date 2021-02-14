<?php

$utilisateurs = [
    [ "pseudo" => "anonyme", "mdp" => "1234" ],
    [ "pseudo" => "luke", "mdp" => "skywalker" ],
    [ "pseudo" => "leia", "mdp" => "princesse" ],
    [ "pseudo" => "solo", "mdp" => "han" ]
];

/* EXO :  si le pseudo est égal à un pseudo d'un utilisateur et si le mdp correspond à cet utilisateur alors
            afficher : Bonjour ..., vous êtes connecté
          sinon afficher : Erreur d'identifiants */

if( $_POST ){
    $connecte = false;
    foreach($utilisateurs as $user){
        if( $_POST["pseudo"] == $user["pseudo"] && $_POST["mdp"] == $user["mdp"]){
            echo "Bonjour " . $user["pseudo"] . " vous êtes connecté";
            $connecte = true;
        }
    }
    if( !$connecte ){
        echo "Erreur d'identifiants !";
    }
}