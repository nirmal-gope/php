<?php
$utilisateurs = [
    ["pseudo" => "anonyme", "mdp" => "1234"],
    ["pseudo" => "luke", "mdp" => "skywalker"],
    ["pseudo" => "leia", "mdp" => "princesse"],
    ["pseudo" => "solo", "mdp" => "han"]

];

if( $_POST ){
    $connecte = false;
foreach($utilisateurs as $user){
    if($_POST["pseudo"] == $user["pseudo"] && $_POST["mdp"] == $user["mdp"]){
    echo "Bonjour ". $user["pseudo"] . " vous étes connecté";
    $connecte = true;
    }
    if(!$connecte){
        echo  "Erreur d'identifiants !";
    }
    