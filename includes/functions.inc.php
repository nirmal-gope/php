<?php

define("PI", 3.1415);

function carre(int $nb) {
    return $nb * $nb;
}

function afficher($chaine){
    echo $chaine . "<br>";
}

/**
 * La fonction superieur($a, $b) renvoie soit true soit false
 * donc elle renvoie toujours un booléen
 */
function superieur($a, $b){
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

function dump($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

function dd($variable){
    // Dump and die
    dump($variable);
    exit;
}