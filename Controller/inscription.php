<?php

session_start();

if (isset($_POST['prenom']))
{
    $_SESSION['prenom'] = $_POST['prenom'];
    $prenom = $_SESSION['prenom'];
}


require_once 'Modele/connexion.php';

require_once 'Vue/inscription.php';