<?php

require_once 'Exception/NotFoundException.php';
require_once 'Modele/connexion.php';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'accueil';
}

$path = 'Controller/'.$action.'.php';

try {
    if (!file_exists($path)) {
        throw new NotFoundException();
    }

    require_once $path;
} catch (NotFoundException $e) {
    require_once 'Vue/404.php';
}