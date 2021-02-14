<?php

/* Les informations du formulaire en méthode GET vont être récupérées dans une variable
    dite superglobale : $_GET

    Une variable superglobale est une variable de PHP qui existe toujours (pas de risque d'erreur
    Undefined variable) et est de type ARRAY
    
    Les principales variables superglobales sont 
    $_GET       : contient les informations du query string (après le ?)
    $_POST      : contient les informations envoyées par un formulaire en méthode POST
    $_SESSION   : contient les informations de session
    $_COOKIE    : contient les cookies
    $_SERVER    : contient des informations liées au serveur
    $_FILES     : contient les fichiers uplpoadés par l'utilisateur
*/


// EXO afficher "Le pseudo est ... et le mot de passe est ..."
//      avec les valeurs qui ont été tapées dans le formulaire
echo "<pre>"; var_dump($_GET); echo "</pre>";

// if( count($_GET) > 0 ){

if( $_GET ){
    echo "Le pseudo est " . $_GET["pseudo"] . " et le mot de passe " . $_GET["mdp"];
}

// if( []  ){
//     echo "un tableau vide est considéré comme false donc cette phrase ne s'affichera pas";
// } else {
//     echo "c'est un tableau vide";
// }
$utilisateur = [
    "pseudo" => "anonyme",
    "mdp" => "1234"
];

if( $_POST ){
    // EXO si le pseudo est égal au pseudo de $utilisateur et le mdp égal au mdp de $utilisateur
            // afficher : Bonjour ..., vous êtes connecté
            // sinon afficher : Erreur d'identifiants 
    // echo "Le pseudo est " . $_POST["pseudo"] . " et le mot de passe " . $_POST["mdp"];
    if ( $_POST["pseudo"] == $utilisateur["pseudo"] && $_POST["mdp"] == $utilisateur["mdp"] ){
        echo "Bonjour, " . $utilisateur["pseudo"] . " vous êtes connecté";
    } else {
        echo "Erreur d'identifiant";
    }
}