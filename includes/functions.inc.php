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

/* EXO : créer une fonction qui renvoie TRUE si un abonné est connecté 
                                        FALSE si aucun abonné n'est connecté 
empty(0) retourne TRUE
empty(-1) retourne FALSE

empty("") retourne TRUE
empty(" ") retourne FALSE

empty(FALSE) retourne TRUE
empty(TRUE) retourne FALSE

empty([]) retourne TRUE
empty([ [] ]) retourne FALSE

empty($objet) retourne FALSE
                                        */
function isConnected_exo()
{
    /* 1ere solution */
    // if( isset($_SESSION["abonne"]) && $_SESSION["abonne"] != [] ){
    if (!empty($_SESSION["abonne"])) {
        return true;
    } else {
        return false;
    }

    /* 2ième solution */
    $connecte = !empty($_SESSION["abonne"]) ? true : false;
    return $connecte;

    /* 3ième solution */
    return !empty($_SESSION["abonne"]);
}

function isConnected()
{
    // Le résultat qui retourne true ou false
    // return !empty($_SESSION["abonne"]);

    /* EXO : la fonction doit renvoyer false ou les informations de l'abonné connecté sous forme d'array */
    return !empty($_SESSION["abonne"]) ? $_SESSION["abonne"] : false;
}

function redirection($url)
{
    header("Location: $url");
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
/* BASE DE DONNES
Retourne un array contenant tous les enregistrements d'une table de la base de données
*/
function selectAll($tableName)
{
    global $pdo; //making $pdo variable global to local
    $pdostatement = $pdo->query("SELECT * FROM " . $tableName);
    // if ($pdostatement !== FALSE) {
    //     return $pdostatement->fetchAll(PDO::FETCH_ASSOC);
    // } else {
    //     return false;
    // }
    return $pdostatement !== FALSE ? $pdostatement->fetchAll(PDO::FETCH_ASSOC) : $pdostatement;
}
