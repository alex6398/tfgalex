<?php

$dns = 'mysql:host=localhost; dbname=tfg';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dns, $user, $pass);
} catch (PDOException $e) {
    echo 'Connection Error! '.$e->getMessage();
}

?>