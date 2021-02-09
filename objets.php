<?php

$objet1 = new stdClass;
$objet1->pseudo = "luke";
$objet1->mdp = "sky";

$array1 = ["prenom" => "luke", "mdp" => "sky"];

echo "<pre>";
var_dump($objet1, $array1);
echo "</pre>";

echo "La propriété pseudo de \$objet1 est " . $objet1->pseudo . "<br>";

class Voiture
{
    public $marque;
    public $modele;
    public $couleur;

    public function demarrer()
    {
        echo "Je suis une voiture de la marque " . $this->marque . ", je démarre ...<br>";
    }
    public function changeCouleur($nouvelleCouleur)
    {
        $this->couleur =  $nouvelleCouleur;
    }

    public function carteGrise()
    {
        return "<ul>
        <li>Marque : $this->marque</li>
        <li>Modéle : $this->modele</li>
        <li>Couleur : $this->couleur</li>
        <li>Moteur : $this->moteur</li>
        </ul>";
    }
}

$voiture1 = new Voiture;
$voiture1->marque = "Renault";
$voiture1->modele = "Megane";
$voiture1->couleur = "Orange";

echo "Ma voiture " . $voiture1->marque . " , " . $voiture1->modele . " est de couleur " . $voiture1->couleur . "<br>";
$voiture1->demarrer();


$voiture2 = new Voiture;
$voiture2->marque = "Audi";
$voiture2->modele = "S6";
$voiture2->couleur = "Black";
echo "<h2>";
echo "Ma voiture " . $voiture2->marque . " , " . $voiture2->modele . " est de couleur " . $voiture2->couleur . "<br>";
$voiture2->demarrer();
echo "</h2>";
$voiture1->changeCouleur("vert caca d'oie");
echo "<pre>";
echo var_dump($voiture1);
echo "</pre>";

$voiture1->moteur = "V12";
$voiture2->moteur = "V15";

echo "<pre>";
echo var_dump($voiture1, $voiture2);
echo "</pre>";

echo $voiture1->carteGrise();
echo $voiture2->carteGrise();
