
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=restaurants", "root", "");
} catch (Exception $ex) {
    die($ex->getMessage());
}