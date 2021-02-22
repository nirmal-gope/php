<?php
session_start();
if (empty($_SESSION["compteur"])) {
    $_SESSION["compteur"] = 1;
    $_SESSION["nombreAleatoire"] = rand(1, 10);
}

extract($_SESSION);
/**
 * extract($_SESSION)  est équivalent aux lignes suivantes:
 * $compteur = $_SESSION["compteur"]
 * $nombreAleatoire = $_SESSION["nombreAleatoire"]
 * 
 * 
 */
if ($_POST) {
    extract($_POST);
    if (!empty($nombre)) {
        /* La fonction is_numeric renvoie true si elle contient une
                variable numérique ou un string qui est un numérique
                Par ex : is_numeric("12") est vrai
                         is_numeric("12qsdfqsd") est faux
            
                La fonction is_int vérifie si une variable est un entier
                c'est-à-dire que son type est integer 
                Par ex : is_int(12)     est vrai
                         is_int(12.5)   est faux
                         is_int("12")   est faux

                Pour transformer une variable en integer, on peut écrire
                    $nombre = (int)$nombre;
                Cela fonctionne pour quasiment tous les types de variable
                (boolean, string, int, float,...)

                La fonction trim($chaine) supprime les espaces au début
                et à la fin d'une chaîne de caractères
            */
        $nombre = trim($nombre);
        if (is_numeric($nombre) && is_int((int)$nombre)) {
            if ($nombre >= 1 && $nombre <= 10) {
                //$nombreAleatoire = rand(1, 10);
                if ($nombre == $nombreAleatoire) {
                    $msg = "Bravo, vous avez deviné le nombre $nombre au $compteur ième essai";
                    $compteur = 0;
                } else {
                    if ($compteur < 3) {
                        $msg = "Désolé, essaye encore !";
                        $compteur++;
                    } else {
                        $msg = "Vous avez perdu !! Le nombre à  trouver était $nombreAleatoire";
                        $compteur = 0;
                    }
                }
                $_SESSION["compteur"] = $compteur;
            } else {
                $msg = "Le nombre tapé doit être compris entre 1 et 10";
                $nombreTape = $nombre;
            }
        } else {
            $msg = "Vous devez taper un entier";
        }
    } else {
        $msg = "Vous devez taper un nombre";
    }
}
?>
<div class="col-12 m-5 p-5">
    <?php if ($compteur != 0) : ?>

        <h1 class="text-center">Devinez un nombre : <?= $compteur ?>ière essai</h1>
        <form method="POST" class="p-5">
            <div class="form-group">
                <libel for="nombre">Tapez un nombre entre 1 et 10 : </libel>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?= isset($nombreTape) ? $nombreTape : "" ?>">
                <p class="alert alert-info mt-2"><?= isset($msg) ? $msg : "" ?></p>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    <?php else :  ?>

        <a class="btn btn-info" href="/devine">Recommencer </a>

    <?php endif; ?>
</div>


<?php
include "header.html.php";
include "footer.html.php";
