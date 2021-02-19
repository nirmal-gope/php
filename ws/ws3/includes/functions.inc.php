<?php
function selectAll($tableName)
{
    global $pdo;
    $pdostatement = $pdo->query("SELECT * FROM " . $tableName);
    return $pdostatement !== FALSE ? $pdostatement->fetchAll(PDO::FETCH_ASSOC) : $pdostatement;
}
function redirection($url)
{
    header("Location: $url");
    exit;
}

function messages($type)
{
    return !empty($_SESSION["messages"][$type]) ? $_SESSION["messages"][$type] : [];
}

function isConnected()
{
    return !empty($_SESSION["abonne"]) ? $_SESSION["abonne"] : false;
}

function isAdmin()
{
    $abonne = isConnected();
    if ($abonne && $abonne["sattut"] >= 50) {
        return $abonne;
    } else {
        return false;
    }
}

function ajouterMessage($type, $message)
{
    $_SESSION["messages"][$type][] = $message;
}
