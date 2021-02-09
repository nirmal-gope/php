<?php
include "functions.inc.php";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=biblio", "root", "");
} catch (Exception $ex) {
    die($ex->getMessage());
}
