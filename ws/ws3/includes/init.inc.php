<?php
session_start();
try {
    $pdo = new PDO("mysql:host=localhost;dbname=consession", "root", "");
} catch (Exception $ex) {
    die($ex->getMessage());
}

include "functions.inc.php";
