<?php

$objet1 = new stdClass;
$objet1->pseudo = "luke";
$objet1->mdp = "sky";

$array1 = ["prenom" => "luke", "mdp" => "sky"];

echo "<pre>";
var_dump($objet1, $array1);
echo "</pre>";

echo "La propriété pseudo de \$objet1 est " . $objet1->pseudo . "<br>";

class Voiture{
    public $marque;
    public $modele;
    public $couleur;

    public function demarrer(){
    echo "Je démarre ...<br>";
    }
}

$voiture1 = new Voiture;
$voiture1->marque = "Renault";
$voiture1->modele = "Megane";
$voiture1->couleur = "Orange";

echo "Ma voiture " . $voiture1->marque . " , " . $voiture1->modele. " est de couleur " . $voiture1->couleur . "<br>";
$voiture1-> demarrer();


