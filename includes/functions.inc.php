<?php

define("PI", 3.1415);

function carre(int $nb)
{
    return $nb * $nb;
}

function afficher($chaine)
{
    echo $chaine . "<br>";
}

/**
 * La fonction superieur($a, $b) renvoie soit true soit false
 * donc elle renvoie toujours un booléen
 */
function superieur($a, $b)
{
    // if($a > $b){
    //     return true;
    // } else {
    //     return false;
    // }

    /* Lorsqu'on utilise un opérateur de comparaison, le résultat de l'opération
       est forcément un booléen (donc true ou false). Je peux donc envoyer le
       résultat de l'opération $a > $b comme résultat de ma fonction superieur($a, $b) */
    return $a > $b;
}

function dump($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

function dd($variable)
{
    // Dump and die
    dump($variable);
    exit;
}

/* EXO: créer une fonction qui renvoie TRUE si un abonné est connecté FALSE si aucun abonné n'est connecté 

empty(0) retourne TRUE
empty(-1) retourne FALSE

empty ("") retourne TRUE
empry(" ") retourne FALSE

empry(FALSE) retourne TRUE
empry(TRUE) retourne FALSE

empry([]) retourne TRUE
empry([ [] ]) retourne FALSE

empty($objet) retourne FALSE

*/
function isConnected()
{
    return  !empty($_SESSION["abonne"]) ? $_SESSION["abonne"] : false;
}

function redirection($url)
{
    header("location: $url");
    exit;
}

function isAdmin()
{
    $abonne = isConnected();
    if ($abonne && $abonne["niveau"] >= 50) {
        return $abonne;
    } else {
        return false;
    }
}
