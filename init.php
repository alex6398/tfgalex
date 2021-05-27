<?php
include 'config/config.php';
include 'clases/usuario.php';
include 'clases/Articulos.php';


global $pdo;

session_start();

$usuario = new usuario($pdo);



define("BASE_URL", "http://localhost/misProyectos/tfg/");
?>