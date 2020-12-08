<?php
// Si la session existe
session_start();
if(isset($_SESSION)) {
    include('MainWindow.php'); // On importe la class
    $page = new MainWindow(); // On créer la page
}
else {
    header('Location: Connexion.php');
}