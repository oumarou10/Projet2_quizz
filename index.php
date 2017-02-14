<?php

require_once 'Modele/connexion.php';

if (!empty($_GET['lieu'])) {
    $lieu = $_GET['lieu'];
}

else{
    $lieu = 'accueil';
}

$path = 'Controller/'.$lieu.'.php';

if (file_exists($path)) {
   require_once $path;
}

else {
    require_once 'Vue/404.php';
}
