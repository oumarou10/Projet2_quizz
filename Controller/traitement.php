<?php

require_once 'Modele/quizz.php';

if (isset($_GET['id'])){
    $quizzId = (int) $_GET['id'];

    $getGoodAns = getBonnesReponses($quizzId);

    $nbQst = getNbQst($quizzId);

}

$bonnesReponses = []; // Création du tableau qui contiendra les bonnes réponses
$bonnesReponses = $getGoodAns;
var_dump($bonnesReponses);

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

var_dump($reponsesSaisies);

$resultatQuizz = 0;

require_once 'Vue/traitement.php';
