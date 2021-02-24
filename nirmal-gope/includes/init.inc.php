<?php
session_start();
try {
    $pdo = new PDO("mysql:host=localhost;dbname=immobilier", "root", "");
} catch (Exception $ex) {
    die($ex->getMessage());
}

include "functions.inc.php";
