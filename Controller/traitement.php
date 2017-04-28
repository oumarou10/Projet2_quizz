<?php

session_start();

$_SESSION['prenom'] = $_POST['prenom'];
$prenom = $_SESSION['prenom'];


require_once 'Modele/quizz.php';

//$pseudo = $_SESSION['prenom'];

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];

    $getGoodAns = getBonnesReponses($quizzId);

    $nbQst = getNbQst($quizzId);

    $questions = getQst($quizzId);

}

$errors = []; // On crée un tableau vide qui contiendra les erreurs

for ($i = 1; $i <= $nbQst;$i++)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['question'.$i]))
        {
            $errors[] = 'La question ' .$i. ' na pas été cochée';
        }
    }
}


$reponsesSaisies = [];
$reponsesSaisies = $_POST;

$resultatQuizz = 0;

$j = 1;
$i = 0;
$lastQId = -20;

require_once 'Vue/traitement.php';
