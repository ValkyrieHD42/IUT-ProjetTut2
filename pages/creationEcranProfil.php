<?php

include('inc/header.php');

require('../pages/ProfileWindow.php');
require('../app/User.php');



$user = new User($_SESSION);

$pageProfil = new ProfileWindow($user);

// remplacer le block par get user connected après
