<?php
/* La fonction include permet de "copier" le contenu d'un fichier
    PHP pour pouvoir utiliser son contenu (ex: les fonctions, les 
    variables, les constantes, l'affichage...)
*/
include "functions.inc.php";
include "vues/header.html.php";

afficher("Formulaire");
afficher("Ceci est un formaire de connexion");

afficher("carré de 5 " . carre(5));
afficher("Affichage du formulaire : ");
include "vues/form.html.php";


include "vues/footer.html.php";