<?php


echo "<pre>";
var_dump($_GET);
echo "</pre>";


if($_GET){
echo "Le pseudo est " . $_GET["pseudo"] . " et le mot de passe " . $_GET["mdp"];
}

// if([]){
// echo "un tableau vide est considéré comme false donc cette phrase ne s'affichera pas";
// }else{
    // echo "c'est un tableau vide";
// }
$utilisateur = [
    "pseudo" => "anonyme",
    "mdp" => "1234"
];

if( $_POST ){
echo "Le pseudo est " . $_POST["pseudo"] . " et le mot de passe " . $_POST["mdp"];
if($_POST["pseudo"] == $utilisateur["pseudo"] && $_POST["mdp"] == $utilisateur["mdp"]){
    echo "Bonjour ". $utilisateur["pseudo"] . " vous étes connecté";
}else{
    echo "Erreur d'identifiants";
}

}