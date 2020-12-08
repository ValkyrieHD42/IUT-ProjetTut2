<?php

require '../app/rooterExperiment/Autoloader.php';

Autoloader::register();

if(isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

if($p === 'home') {
    require '../pages/Connexion.php'; //J'ai changer sur la page connexion comme on avait pas encore de page home, a remetre home apres (Manon)
}
