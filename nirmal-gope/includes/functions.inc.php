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
