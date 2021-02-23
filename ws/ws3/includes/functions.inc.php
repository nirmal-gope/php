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
    return !empty($_SESSION["membre"]) ? $_SESSION["membre"] : false;
}

function isAdmin()
{
    $membre = isConnected();
    if ($membre && $membre["sattut"] >= 50) {
        return $membre;
    } else {
        return false;
    }
}
function isAbonne()
{
    $membre = isConnected();
    if ($membre && ($membre["sattut"] = 10 && $membre["sattut"] = 30)) {
        return $membre;
    } else {
        return false;
    }
}


function dd($variable)
{

    dump($variable);
    exit;
}
function dump($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}
