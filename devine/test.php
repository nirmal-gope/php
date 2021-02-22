<?php

if (!empty($_POST["nombre"])) {
    echo "vous avez tapé le nombre :" . $_POST["nombre"];
} else {
    echo  "vous devez taper un nombre dans le formulaire";
    echo "<a href = 'index.php'>Retour</a>";
}

$textelong = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus neque minima nulla omnis, doloribus earum perferendis, in illo repellendus dolore quam temporibus placeat sequi nam totam fugit. Dolore, ut sapiente! ";

?>
<h2>Texte entier</h2>
<?= $texteLong ?>

<h2>Texte raccourci</h2>
<?= substr($texteLong, 0, 10) ?>
/**

1. Créer une page qui s'affiche dans votre navigateur avec l'URL suivante : localhost/devine
avec une balise H1 "Devinez un nombre"
un formulaire en methode POST
un label avec "Tapez un nombre entre 1 et 10"
un input pour taper un nombre (type text)

2. Récupérer sur la page devine/test.php le nombre qui a été tapé par l'utilisateur
Afficher "Vous avez tapé le nombre ..."


3.Faire la même chose que 2. dans le même fichier (index.php) : vous devez afficher la phrase après le formulaire

4. Vérifiez que le texte tapé est bien un entier

5. Vérifiez que le nombre tapé est compris entre 1 et 10
Si ce n'est pas le cas, affichez le message
"le nombre tapé doit être compris entre 1 et 10"

6. Si le nombre est un entier qui n'est pas compris entre 1 et 10,
vous devez réaffichez ce nombre dans l'input

7. Si l'utilisateur a bien tapé un nombre entre 1 et 10,
vous devez générer un nombre aléatoire entre 1 et 10
Si le nombre aléatoire correspond au nombre tapé le
message sera "Bravo, vous avez deviné le nombre ..."
sinon le message sera "Désolé, vous n'avez pas deviné"
https://www.php.net/manual/fr/function.rand.php : rand(1, 10)


7 bis. Compter le nombre d'essai de l'utilsatateur jusqu'à ce qu'il devine le nombre
Quand l'utilisateur a trouvé, le compteur recommence à 0

8. L'utilisateur peut essayer 3 fois de deviner le nombre
Soit il trouve avant les 3 essais, on sort de la boucle et
on affiche le message de succès
Soit il ne trouve pas et vous affichez
"Vous n'avez pas trouvé le nombre ... au bout des 3 essais"

*/