<?php

session_start();

if (isset($_POST['prenom']))
{
    $prenom = ucfirst(strtolower(trim($_POST['prenom'])));
    $_SESSION['prenom'] = $prenom;
    $prenom = $_SESSION['prenom'];

}

elseif (isset($_GET['prenom']))
{
    $prenom = $_GET['prenom'];
}

else
{
    $prenom = '';
}

require_once 'Modele/quizz.php';

require_once 'Class/Quizz.php';

$quizzAll = new Quizz();

$allQuiz = $quizzAll->getAll($bdd);

require_once 'Vue/accueil.php';
